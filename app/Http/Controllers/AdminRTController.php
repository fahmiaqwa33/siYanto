<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRTController extends Controller
{
    public function index()
    {
        return view('rt.dashboard'); // Mengarahkan ke view dashboard admin RT
    }
}
