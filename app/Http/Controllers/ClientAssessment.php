<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Question;

class ClientAssessment extends Controller
{
    public function index($client_id)
    {
        $clientForm = Client::findOrFail($client_id);

        $medical = Question::find(2);
        $prior = Question::find(3);
        $occupational = Question::find(4);
        $general = Question::find(5);
        $nutritional = Question::find(6);
        $goal = Question::find(7);
        $transformation = Question::find(8);

        // dd($medical->choices);
        // dd($clientForm);
        return view('clients_assesment.index', compact(
            'medical',
            'prior',
            'occupational',
            'general',
            'nutritional',
            'goal',
            'transformation'
        ));
    }
}
