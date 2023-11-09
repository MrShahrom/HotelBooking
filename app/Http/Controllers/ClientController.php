<?php
namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Room;
use Illuminate\View\View;
class ClientController extends Controller
{
    public function index(): View
    {
        $clients = Client::all();
        return view('clients.index')->with('clients', $clients);
    }
 
    public function create(): View
    {
        return view('clients.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Client::create($input);
        return redirect('client')->with('flash_message', 'Client Addedd!');
    }
    public function show(string $id): View
    {
        $client = Client::find($id);
        return view('clients.show')->with('clients', $client);
    }
    public function edit(string $id): View
    {
        $client = Client::find($id);
        return view('clients.edit')->with('clients', $client);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $client = Client::find($id);
        $input = $request->all();
        $client->update($input);
        return redirect('client')->with('flash_message', 'Client Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Client::destroy($id);
        return redirect('client')->with('flash_message', 'Client deleted!'); 
    }
}