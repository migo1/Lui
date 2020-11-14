<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {

        $clients = Client::all();

        return view('clients.index', compact('clients'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function store(ClientRequest $request)
    {
        $client =  Client::create($request->all());
// dd($client);
        // $client->name = $request->input('name');
        // $client->email = $request->input('email');
        // $client->start_date = $request->input('start_date');
        
        // $client->save();

        return back();
    }

    public function update(ClientRequest $request)
    {

        $client = Client::findOrFail($request->client_id);
        $client->name = $request->input('name');
        $client->middle_name = $request->input('middle_name');
        $client->last_name = $request->input('last_name');
        $client->gender = $request->input('gender');
        $client->address = $request->input('address');
        $client->street = $request->input('street');
        $client->city = $request->input('city');
        $client->country = $request->input('country');
        $client->zip = $request->input('zip');
        $client->email = $request->input('email');
        $client->phone = $request->input('phone');
        $client->dob = $request->input('dob');
        $client->start_date = $request->input('start_date');

        $client->update();

        return back();

    }

    public function show($id)
    {
        $client = Client::find($id);

        $gender = '';
        if($client->gender == 1){
          $gender = 'Female';
        }elseif ($client->gender == 0) {
          $gender = 'Male';
        }else{
            $gender = '';
        }

        return view('clients.show',compact('client', 'gender'));
    }

    public function destroy(Request $request)
    {
        $client = Client::findOrFail($request->client_id);
        $client->delete();
        return back();
    }
}
