<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\pengguna; 
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        Pengguna::create([
            'username' => 'admin_kelurahan',
            'email' => 'admin@kelurahan.com',
            'password' => Hash::make('password123'),
            'role_id' => 1, // Role untuk Admin Kelurahan
        ]);

        Pengguna::create([
            'username' => 'admin_rw1',
            'email' => 'adminrw@kelurahan.com',
            'password' => Hash::make('password123'),
            'role_id' => 2, // Role untuk Admin RW
        ]);

        Pengguna::create([
            'username' => 'admin_rt1',
            'email' => 'adminrt@kelurahan.com',
            'password' => Hash::make('password123'),
            'role_id' => 3, // Role untuk Admin RT
        ]);

        Pengguna::create([
            'username' => 'fahmi',
            'email' => 'fahmi@kelurahan.com',
            'password' => Hash::make('password123'),
            'role_id' => 4, // Role untuk Masyarakat
        ]);
    }
}
