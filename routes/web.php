<?php

use Illuminate\Support\Facades\Route;
// Import Controller
use App\Http\Controllers\BukuController;

// Resource Route untuk koleksi buku
Route::resource('koleksi', BukuController::class);