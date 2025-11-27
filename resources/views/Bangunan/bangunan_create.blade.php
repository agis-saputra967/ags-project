@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Bangunan</h2>
    <form action="{{ route('bangunan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_bangunan" class="form-label">Nama Bangunan</label>
            <input type="text" class="form-control" id="nama_bangunan" name="nama_bangunan" required>
        </div>
        <div class="mb-3">
            <label for="kode_bangunan" class="form-label">Kode Bangunan</label>
            <input type="text" class="form-control" id="kode_bangunan" name="kode_bangunan" required>
        </div>
        <div class="mb-3">
            <label for="tanah_id" class="form-label">Tanah</label>
            <select class="form-control" id="tanah_id" name="tanah_id" required>
                <option value="">Pilih Tanah</option>
                @foreach($tanah as $t)
                    <option value="{{ $t->id }}">{{ $t->nama_tanah }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('bangunan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
