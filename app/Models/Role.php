<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi
    protected $table = 'roles'; // Pastikan nama tabel ini sesuai dengan database

    // Tentukan atribut yang dapat diisi secara massal
    protected $fillable = [
        'role_name', // Ganti dengan nama kolom yang sesuai di tabel roles
    ];

    // Relasi dengan model Pengguna
    public function pengguna()
    {
        return $this->hasMany(Pengguna::class); // Sesuaikan dengan model yang benar
    }
}
