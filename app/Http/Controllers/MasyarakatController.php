<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index()
    {
        return view('masyarakat.dashboard'); // Mengarahkan ke view dashboard masyarakat
    }
}
