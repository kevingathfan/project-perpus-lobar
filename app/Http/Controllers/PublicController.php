<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Library;

class PublicController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->query('cari');
        
        $libraries = [];
        
        if ($keyword) {
            // PERUBAHAN DI SINI:
            // Gunakan 'ilike' (khusus Postgres) agar tidak case-sensitive
            $libraries = Library::where('nama_perpustakaan', 'ilike', "%{$keyword}%")
                        ->orWhere('jenis_instansi', 'ilike', "%{$keyword}%")
                        ->get();
        }

        return view('welcome', [
            'libraries' => $libraries,
            'keyword' => $keyword
        ]);
    
    }
    public function showForm($id)
    {
        // 1. Cari sekolah berdasarkan ID
        $library = Library::findOrFail($id);

        // 2. Tampilkan halaman formulir sambil membawa data sekolah
        return view('form-lapor', ['library' => $library]);
    }
}
Langkah 3: Hubungkan T
}