<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

// Halaman Depan & Pencarian
Route::get('/', [PublicController::class, 'index'])->name('home');