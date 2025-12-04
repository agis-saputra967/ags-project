<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bangunan;

class BangunanController extends Controller
{
    // Menampilkan semua bangunan
    public function index()
    {
        $bangunan = Bangunan::all();
        return view('Bangunan.bangunan', compact('bangunan'));
    }

    // Form Tambah
    public function create()
    {
        return view('Bangunan.bangunan_create');
    }

    // Proses Tambah
    public function store(Request $request)
    {
        $request->validate([
            'nama_bangunan' => 'required',
            'kode_bangunan' => 'required',
        ]);

        Bangunan::create($request->all());

        return redirect()->route('bangunan.index')->with('success', 'Data bangunan berhasil ditambahkan!');
    }

    // Form Edit
    public function edit($id)
    {
        $bangunan = Bangunan::findOrFail($id);
        return view('Bangunan.bangunan_edit', compact('bangunan'));
    }

    // Proses Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_bangunan' => 'required',
            'kode_bangunan' => 'required',
        ]);

        Bangunan::findOrFail($id)->update($request->all());

        return redirect()->route('bangunan.index')->with('success', 'Data bangunan berhasil diperbarui!');
    }

    // Hapus Data
    public function destroy($id)
    {
        Bangunan::findOrFail($id)->delete();

        return redirect()->route('bangunan.index')->with('success', 'Data bangunan berhasil dihapus!');
    }
}
