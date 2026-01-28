<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perpustakaan'); // Contoh: SDN 1 Gerung
            $table->enum('jenis_instansi', ['SD', 'SMP', 'SMA', 'Perguruan Tinggi', 'Desa', 'Komunitas']);
            $table->string('npp')->nullable();   // Nomor Pokok Perpustakaan (Boleh kosong)
            $table->text('alamat')->nullable();  // Alamat lengkap
            $table->string('kepala_perpustakaan')->nullable();
            $table->string('no_telp')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};