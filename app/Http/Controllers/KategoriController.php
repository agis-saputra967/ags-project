<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('Kategori.index', compact('kategori'));
    }

    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('Kategori.show', compact('kategori'));
    }
}
