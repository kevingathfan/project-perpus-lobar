<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Relasi: Laporan ini milik perpustakaan siapa?
    public function library()
    {
        return $this->belongsTo(Library::class);
    }
}