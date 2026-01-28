<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Library;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat 1 Akun Admin untuk Dinas
        User::create([
            'name' => 'Admin Dinas',
            'email' => 'admin@lobar.go.id',
            'password' => Hash::make('password123'), // Passwordnya ini
        ]);

        // 2. Buat Contoh Data Sekolah (Biar tidak kosong saat dicoba)
        Library::create([
            'nama_perpustakaan' => 'Perpus SDN 1 Gerung',
            'jenis_instansi' => 'SD',
            'alamat' => 'Jl. Pendidikan No. 1, Gerung',
        ]);

        Library::create([
            'nama_perpustakaan' => 'Perpus Desa Sigerongan',
            'jenis_instansi' => 'Desa',
            'alamat' => 'Kecamatan Lingsar',
        ]);
    }
}