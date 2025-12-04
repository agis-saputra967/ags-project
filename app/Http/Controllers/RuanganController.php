<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;

class RuanganController extends Controller
{
    // Tampilkan semua ruangan
    public function index()
    {
        $ruangan = Ruangan::all();
        return view('Ruangan.index', compact('ruangan'));
    }

    // Form Tambah Ruangan
    public function create()
    {
        return view('Ruangan.create');
    }

    // Proses Tambah Ruangan
    public function store(Request $request)
    {
        $request->validate([
            'nama_ruangan' => 'required',
            'kode_ruangan' => 'required',
            'keterangan' => 'nullable',
        ]);

        Ruangan::create($request->all());

        return redirect()->route('ruangan.index')
            ->with('success', 'Ruangan berhasil ditambahkan!');
    }

    // Form Edit Ruangan
    public function edit($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        return view('Ruangan.edit', compact('ruangan'));
    }

    // Proses Update Ruangan
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ruangan' => 'required',
            'kode_ruangan' => 'required',
            'keterangan' => 'nullable',
        ]);

        Ruangan::findOrFail($id)->update($request->all());

        return redirect()->route('ruangan.index')
            ->with('success', 'Data ruangan berhasil diperbarui!');
    }

    // Hapus Ruangan
    public function destroy($id)
    {
        Ruangan::findOrFail($id)->delete();

        return redirect()->route('ruangan.index')
            ->with('success', 'Ruangan berhasil dihapus!');
    }
}
