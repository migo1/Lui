<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client ;
use App\Models\Question;

class ClientAssessment extends Controller
{
    public function index($client_id)
    {
        $clientForm = Client::findOrFail($client_id);

        $medical = Question::find(2);

        // dd($medical->choices);
// dd($clientForm);
        return view('clients_assesment.index', compact('medical'));
    }
}
