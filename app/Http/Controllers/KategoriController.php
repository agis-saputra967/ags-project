<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    // Tampilkan semua kategori
    public function index()
    {
        $kategori = Kategori::all();
        return view('Kategori.kategori', compact('kategori'));
    }

    // Form Tambah Kategori
    public function create()
    {
        return view('Kategori.kategori_create');
    }

    // Proses Tambah Kategori
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'kode_kategori' => 'required',
            'keterangan' => 'nullable',
        ]);

        Kategori::create($request->all());

        return redirect()->route('kategori.index')
            ->with('success', 'Kategori berhasil ditambahkan!');
    }

    // Form Edit
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('Kategori.kategori_edit', compact('kategori'));
    }

    // Proses Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'kode_kategori' => 'required',
            'keterangan' => 'nullable',
        ]);

        Kategori::findOrFail($id)->update($request->all());

        return redirect()->route('kategori.index')
            ->with('success', 'Kategori berhasil diperbarui!');
    }

    // Hapus kategori
    public function destroy($id)
    {
        Kategori::findOrFail($id)->delete();

        return redirect()->route('kategori.index')
            ->with('success', 'Kategori berhasil dihapus!');
    }
}
