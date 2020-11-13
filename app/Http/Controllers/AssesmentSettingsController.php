<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class AssesmentSettingsController extends Controller
{
    public function index()

    {

        return view('Settings.index');

    }

    public function show($id)
    {
        $question = Question::findOrFail($id);

        return view('Settings.show', compact('question'));
    }
}
