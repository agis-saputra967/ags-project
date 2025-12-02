<?php

use App\Models\Ruangan;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/ruangan', function() {
    $ruangan = Ruangan::with('bangunan')->get();
    return view('index', compact('ruangan'));
});
Route::get('/test', function () {
    return view ('home',['nama'=>'Agiss']);
});

// Dashboard route
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/barang', App\Http\Controllers\BarangController::class)->names('barang');
Route::resource('/kategori', App\Http\Controllers\KategoriController::class)->names('kategori');
Route::resource('/ruangan', App\Http\Controllers\RuanganController::class)->names('ruangan');
Route::resource('/bangunan', App\Http\Controllers\BangunanController::class)->names('bangunan');
Route::resource('/tanah', TanahController::class)->names('tanah');