@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-14 p-10 rounded-3xl shadow-xl border border-slate-200 bg-white/70 backdrop-blur-xl">

    <h2 class="text-4xl font-bold mb-10 text-slate-900 text-center drop-shadow-sm">
        Tambah Data Bangunan 🏛️
    </h2>

    <form action="{{ route('bangunan.store') }}" method="POST" class="space-y-7">
        @csrf

        <!-- Nama Bangunan -->
        <div>
            <label for="nama_bangunan" class="block font-semibold text-slate-700 mb-2 text-lg">Nama Bangunan</label>
            <input type="text" id="nama_bangunan" name="nama_bangunan"
                class="w-full p-4 rounded-2xl border border-slate-300 focus:ring-2 focus:ring-blue-400 focus:outline-none bg-white shadow-sm"
                placeholder="Masukkan nama bangunan" required>
        </div>

        <!-- Kode Bangunan -->
        <div>
            <label for="kode_bangunan" class="block font-semibold text-slate-700 mb-2 text-lg">Kode Bangunan</label>
            <input type="text" id="kode_bangunan" name="kode_bangunan"
                class="w-full p-4 rounded-2xl border border-slate-300 focus:ring-2 focus:ring-blue-400 focus:outline-none bg-white shadow-sm"
                placeholder="Masukkan kode bangunan" required>
        </div>

        <!-- Pilih Tanah -->
        <div>
            <label for="tanah_id" class="block font-semibold text-slate-700 mb-2 text-lg">Tanah</label>
            <select id="tanah_id" name="tanah_id"
                class="w-full p-4 rounded-2xl border border-slate-300 bg-white shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
                <option value="">Pilih Tanah</option>
                @foreach($tanah as $t)
                    <option value="{{ $t->id }}">{{ $t->nama_tanah }}</option>
                @endforeach
            </select>
        </div>

        <!-- Tombol -->
        <div class="flex justify-between mt-10">
            <button type="submit"
                class="px-7 py-3 text-lg bg-blue-600 text-white rounded-2xl hover:bg-blue-700 transition shadow-lg hover:shadow-xl">
                Simpan
            </button>
            <a href="{{ route('bangunan.index') }}"
                class="px-7 py-3 text-lg bg-slate-300 text-slate-900 rounded-2xl hover:bg-slate-400 transition shadow-lg hover:shadow-xl">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection

{{-- Edit Form Start --}}
<div class="max-w-3xl mx-auto mt-6 bg-white/70 backdrop-blur-lg shadow-xl p-8 rounded-3xl border border-white/20">
    <h2 class="text-2xl font-bold mb-6 bg-gradient-to-r from-blue-600 to-indigo-600 text-transparent bg-clip-text">Edit Data Bangunan</h2>
    <form action="{{ route('bangunan.update', $bangunan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-1">Nama Bangunan</label>
            <input type="text" name="nama_bangunan" value="{{ $bangunan->nama_bangunan }}" class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-1">Kode Bangunan</label>
            <input type="text" name="kode_bangunan" value="{{ $bangunan->kode_bangunan }}" class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-1">Tanah</label>
            <select name="tanah_id" class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                <option value="">Pilih Tanah</option>
                @foreach($tanah as $t)
                    <option value="{{ $t->id }}" {{ $bangunan->tanah_id == $t->id ? 'selected' : '' }}>{{ $t->nama_tanah }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex gap-3 mt-6">
            <button class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl shadow-md transition">Update</button>
            <a href="{{ route('bangunan.index') }}" class="px-5 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold rounded-xl transition">Batal</a>
        </div>
    </form>
</div>
{{-- Edit Form End --}}
