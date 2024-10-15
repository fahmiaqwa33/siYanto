<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Cek apakah pengguna terautentikasi
        if (Auth::check()) {
            $user = Auth::user();
            dd($user); // Debug
        // Cek apakah pengguna memiliki role yang sesuai    
        

            // Cek apakah role_id pengguna sesuai dengan yang diinginkan
            if ($user->role_id == $role) {
                return $next($request);
            }
        }

        // Jika tidak terautentikasi atau role tidak sesuai, redirect ke login
        return redirect('/login')->withErrors('Akses tidak diizinkan.');
    }
}
