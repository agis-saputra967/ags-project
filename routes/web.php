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

Route::resource('/tanah', TanahController::class)->names('tanah');