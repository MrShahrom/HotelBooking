<?php

// app/Http/Controllers/BronController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Bron;
use App\Models\Room;
use App\Models\Client;

class BronController extends Controller
{
    public function index(Request $request)
    {
        $rooms = Room::all();
        $clients = Client::all();
    
        $roomFilter = $request->get('room_filter');
        $timeOfBronFilter = $request->get('time_of_bron_filter');
        $timeOfFreeFilter = $request->get('time_of_free_filter');
        $clientFilter = $request->get('client_filter');
    
        $query = Bron::with(['room', 'client']);
    
        if ($roomFilter) {
            $query->where('room_id', $roomFilter);
        }
    
        if ($timeOfBronFilter) {
            $query->where('time_of_bron', '>=', $timeOfBronFilter);
        }
    
        if ($timeOfFreeFilter) {
            $query->where('time_of_free', '<=', $timeOfFreeFilter);
        }
    
        if ($clientFilter) {
            $query->where('client_id', $clientFilter);
        }
    
        $brons = $query->get();
    
        return view('brons.index', compact('brons', 'rooms', 'clients', 'roomFilter', 'timeOfBronFilter', 'timeOfFreeFilter', 'clientFilter'));
    }

    public function create()
    {
        $rooms = Room::all();
        $clients = Client::all();

        return view('brons.test', compact('rooms', 'clients'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'time_of_bron' => 'required|date',
            'time_of_free' => [
                'required',
                'date',
                Rule::unique('brons')->where(function ($query) use ($request) {
                    return $query->where('room_id', $request->input('room_id'))
                        ->where('time_of_bron', '<=', $request->input('time_of_free'))
                        ->where('time_of_free', '>=', $request->input('time_of_bron'));
                }),
            ],
            'client_id' => 'required|exists:clients,id',
        ]);

        $roomId = $request->input('room_id');
        $timeOfBron = $request->input('time_of_bron');
        $timeOfFree = $request->input('time_of_free');

        // // Проверка доступности комнаты
        $isRoomAvailable = $this->checkRoomAvailability($roomId, $timeOfBron, $timeOfFree);

        if (!$isRoomAvailable) {
            // Если комната занята, вернуть ошибку
            return redirect()->route('brons.create')->with('error', 'Комната уже занята в указанный период.');
        }

        // Если комната свободна, сохранить бронь
        Bron::create($request->all());

        return redirect()->route('brons.index')->with('success', 'Бронирование успешно добавлено.');
    }

    // Метод для проверки доступности комнаты
    private function checkRoomAvailability($roomId, $timeOfBron, $timeOfFree)
    {
        $conflictingBrons = DB::table('brons')
            ->where('room_id', $roomId)
            ->where(function ($query) use ($timeOfBron, $timeOfFree) {
                $query->whereBetween('time_of_bron', [$timeOfBron, $timeOfFree])
                    ->orWhereBetween('time_of_free', [$timeOfBron, $timeOfFree]);
            })
            ->get();

        return $conflictingBrons->isEmpty();
    }


    // Добавьте остальные методы по необходимости
    
}
