<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {

        $clients = Client::all();

        return view('clients.index', compact('clients'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function store(Request $request)
    {
        $client = new Client();

        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->start_date = $request->input('start_date');
        
        $client->save();

        return back();
    }

    public function show($id)
    {
        $client = Client::find($id);


        return view('clients.show',compact('client'));
    }
}
