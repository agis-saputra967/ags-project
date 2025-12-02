<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bangunan;

class BangunanController extends Controller
{
    public function index()
    {
        $bangunan = Bangunan::all();
        return view('Bangunan.bangunan', compact('bangunan'));
    }

    public function show($id)
    {
        $bangunan = Bangunan::findOrFail($id);
        return view('Bangunan.show', compact('bangunan'));
    }
}
