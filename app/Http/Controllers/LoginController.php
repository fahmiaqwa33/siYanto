<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengguna; // Pastikan model ini sesuai

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login'); // Ganti dengan view login Anda
    }

    // Memproses login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string', // Mengganti 'email' menjadi 'username'
            'password' => 'required|string',
        ]);
    
        // Mencari pengguna berdasarkan username
        $user = Pengguna::where('username', $request->username)->first();
    
        // Memeriksa apakah pengguna ada dan passwordnya cocok
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user); // Login pengguna

            // Redirect sesuai dengan role_id
            switch ($user->role_id) {
                case 1:
                    return redirect('/admin/kelurahan'); // Dashboard Admin Kelurahan
                case 2:
                    return redirect('/admin/rw'); // Dashboard Admin RW
                case 3:
                    return redirect('/admin/rt'); // Dashboard Admin RT
                case 4:
                    return redirect('/masyarakat'); // Dashboard Masyarakat
                default:
                    return redirect('/home'); // Halaman default jika tidak ada role yang sesuai
            }
        }
    
        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }
    
    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/'); // Redirect ke halaman beranda setelah logout
    }
}
