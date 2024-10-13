<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRWController extends Controller
{
    public function index()
    {
        return view('rw.dashboard'); // Mengarahkan ke view dashboard admin RW
    }
}
