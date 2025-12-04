<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    // Tampilkan semua barang
    public function index()
    {
        $barang = Barang::all();
        return view('Barang.barang', compact('barang'));
    }

    // Form Tambah Barang
    public function create()
    {
        return view('Barang.barang_create');
    }

    // Proses Tambah Barang
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'kode_barang' => 'required',
            'kategori' => 'required',
            'jumlah' => 'required|numeric',
            'keterangan' => 'nullable',
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan!');
    }

    // Form Edit
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('Barang.barang_edit', compact('barang'));
    }

    // Proses Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'kode_barang' => 'required',
            'kategori' => 'required',
            'jumlah' => 'required|numeric',
            'keterangan' => 'nullable',
        ]);

        Barang::findOrFail($id)->update($request->all());

        return redirect()->route('barang.index')
            ->with('success', 'Data barang berhasil diperbarui!');
    }

    // Hapus Barang
    public function destroy($id)
    {
        Barang::findOrFail($id)->delete();

        return redirect()->route('barang.index')
            ->with('success', 'Barang berhasil dihapus!');
    }
}
