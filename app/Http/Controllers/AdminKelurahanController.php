<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminKelurahanController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); // Mengarahkan ke view dashboard admin kelurahan
    }
}
