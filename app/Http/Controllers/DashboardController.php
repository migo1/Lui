<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\Client;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }


}
