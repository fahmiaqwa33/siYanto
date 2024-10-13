<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminKelurahanController;
use App\Http\Controllers\AdminRWController;
use App\Http\Controllers\AdminRTController;
use App\Http\Controllers\MasyarakatController;


Route::get('/', function () {
    return view('landingpage'); // pastikan untuk mengganti 'landing' dengan nama view Anda
});

// Route untuk menampilkan halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
// Route untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk setiap dashboard
Route::get('/admin/kelurahan', [AdminKelurahanController::class, 'index'])->middleware('checkRole:1');

Route::get('/admin/rw', [AdminRWController::class, 'index'])->middleware('checkRole:2');

Route::get('/admin/rt', [AdminRTController::class, 'index'])->middleware('checkRole:3');

Route::get('/masyarakat', [MasyarakatController::class, 'index'])->middleware('checkRole:4');
