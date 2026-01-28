<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Library; // Panggil model Sekolah

class PublicController extends Controller
{
    // 1. Tampilkan Halaman Depan
    public function index(Request $request)
    {
        // Jika ada pencarian, cari datanya. Jika tidak, kosongkan.
        $keyword = $request->query('cari');

        $libraries = [];
        if ($keyword) {
            $libraries = Library::where('nama_perpustakaan', 'LIKE', "%{$keyword}%")
                        ->orWhere('jenis_instansi', 'LIKE', "%{$keyword}%")
                        ->get();
        }

        return view('welcome', [
            'libraries' => $libraries,
            'keyword' => $keyword
        ]);
    }
}