<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;

class RuanganController extends Controller
{
    public function index()
    {
        $ruangan = Ruangan::all();
        return view('Ruangan.index', compact('ruangan'));
    }

    public function show($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        return view('Ruangan.show', compact('ruangan'));
    }
}
