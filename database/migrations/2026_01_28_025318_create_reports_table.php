<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            // Ini menghubungkan laporan ke sekolah tertentu
            $table->foreignId('library_id')->constrained('libraries')->onDelete('cascade');

            $table->year('tahun'); // Laporan tahun berapa
            $table->enum('status', ['draft', 'final'])->default('draft');

            // Nilai Skor Akhir
            $table->float('skor_iplm')->default(0);
            $table->float('skor_tkm')->default(0);

            // Jawaban Detail (Disimpan dalam format JSON biar fleksibel)
            $table->json('detail_iplm')->nullable();
            $table->json('detail_tkm')->nullable();

            $table->string('pengisi_data')->nullable(); // Nama orang yang mengisi
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};