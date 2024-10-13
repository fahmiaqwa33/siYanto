<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            ['role_name' => 'Admin Kelurahan'], // Level 1
            ['role_name' => 'Admin RW'],        // Level 2
            ['role_name' => 'Admin RT'],        // Level 3
            ['role_name' => 'Masyarakat']       // Level 4
        ]);
    }
}
