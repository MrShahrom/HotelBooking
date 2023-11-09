<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Room;
use Illuminate\View\View;
class RoomController extends Controller
{
    public function index(): View
    {
        $rooms = Room::all();
        return view('rooms.index')->with('rooms', $rooms);
    }
 
    public function create(): View
    {
        return view('rooms.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Room::create($input);
        return redirect('room')->with('flash_message', 'Room Addedd!');
    }
    public function show(string $id): View
    {
        $room = Room::find($id);
        return view('rooms.show')->with('rooms', $room);
    }
    public function edit(string $id): View
    {
        $room = Room::find($id);
        return view('rooms.edit')->with('rooms', $room);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $room = Room::find($id);
        $input = $request->all();
        $room->update($input);
        return redirect('room')->with('flash_message', 'Room Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Room::destroy($id);
        return redirect('room')->with('flash_message', 'Room deleted!'); 
    }
}