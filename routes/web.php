<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TanahController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\BangunanController;

// Test
Route::get('/test', function () {
    return view('home', ['nama' => 'Agiss']);
});

// Dashboard utama
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard khusus admin
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('admin');

// Resource
Route::resource('/barang', BarangController::class);
Route::resource('/kategori', KategoriController::class);
Route::resource('/ruangan', RuanganController::class);
Route::resource('/bangunan', BangunanController::class);
Route::resource('/tanah', TanahController::class);
