<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanah;

class TanahController extends Controller
{
    // Tampilkan semua tanah
    public function index()
    {
        $tanah = Tanah::all();
        return view('Tanah.index', compact('tanah'));
    }

    // Form Tambah Tanah
    public function create()
    {
        return view('Tanah.create');
    }

    // Proses Tambah Tanah
    public function store(Request $request)
    {
        $request->validate([
            'nama_tanah' => 'required',
            'kode_tanah' => 'required',
            'lokasi' => 'required',
            'luas' => 'required|numeric',
            'keterangan' => 'nullable',
        ]);

        Tanah::create($request->all());

        return redirect()->route('tanah.index')
            ->with('success', 'Data tanah berhasil ditambahkan!');
    }

    // Form Edit Tanah
    public function edit($id)
    {
        $tanah = Tanah::findOrFail($id);
        return view('Tanah.edit', compact('tanah'));
    }

    // Proses Update Tanah
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_tanah' => 'required',
            'kode_tanah' => 'required',
            'lokasi' => 'required',
            'luas' => 'required|numeric',
            'keterangan' => 'nullable',
        ]);

        Tanah::findOrFail($id)->update($request->all());

        return redirect()->route('tanah.index')
            ->with('success', 'Data tanah berhasil diperbarui!');
    }

    // Hapus Tanah
    public function destroy($id)
    {
        Tanah::findOrFail($id)->delete();

        return redirect()->route('tanah.index')
            ->with('success', 'Data tanah berhasil dihapus!');
    }
}
