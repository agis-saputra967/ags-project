@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-100 via-white to-slate-200 py-12 px-4">
    <div class="max-w-3xl mx-auto bg-white/70 backdrop-blur-md p-10 rounded-3xl shadow-xl border border-slate-200">

        <h2 class="text-4xl font-bold text-slate-800 mb-8">Edit Data Bangunan</h2>

        <form action="{{ route('bangunan.update', $bangunan->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="nama_bangunan" class="block font-semibold text-slate-700 mb-1">Nama Bangunan</label>
                <input type="text" id="nama_bangunan" name="nama_bangunan" value="{{ $bangunan->nama_bangunan }}" required
                    class="w-full p-3 rounded-xl border border-slate-300 shadow-sm focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition bg-white/60">
            </div>

            <div>
                <label for="kode_bangunan" class="block font-semibold text-slate-700 mb-1">Kode Bangunan</label>
                <input type="text" id="kode_bangunan" name="kode_bangunan" value="{{ $bangunan->kode_bangunan }}" required
                    class="w-full p-3 rounded-xl border border-slate-300 shadow-sm focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition bg-white/60">
            </div>

            <div>
                <label for="tanah_id" class="block font-semibold text-slate-700 mb-1">Tanah</label>
                <select id="tanah_id" name="tanah_id" required
                    class="w-full p-3 rounded-xl border border-slate-300 shadow-sm focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition bg-white/60">
                    <option value="">Pilih Tanah</option>
                    @foreach($tanah as $t)
                        <option value="{{ $t->id }}" {{ $bangunan->tanah_id == $t->id ? 'selected' : '' }}>{{ $t->nama_tanah }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex gap-4 pt-4">
                <button type="submit" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl shadow-md transition">Update</button>
                <a href="{{ route('bangunan.index') }}" class="px-6 py-3 bg-slate-500 hover:bg-slate-600 text-white rounded-xl shadow-md transition">Batal</a>
            </div>

        </form>
    </div>
</div>
@endsection