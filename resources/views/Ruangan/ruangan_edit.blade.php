@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Ruangan</h2>
    <form action="{{ route('ruangan.update', $ruangan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
            <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" value="{{ $ruangan->nama_ruangan }}" required>
        </div>
        <div class="mb-3">
            <label for="kode_ruangan" class="form-label">Kode Ruangan</label>
            <input type="text" class="form-control" id="kode_ruangan" name="kode_ruangan" value="{{ $ruangan->kode_ruangan }}" required>
        </div>
        <div class="mb-3">
            <label for="bangunan_id" class="form-label">Bangunan</label>
            <select class="form-control" id="bangunan_id" name="bangunan_id" required>
                <option value="">Pilih Bangunan</option>
                @foreach($bangunan as $b)
                    <option value="{{ $b->id }}" {{ $ruangan->bangunan_id == $b->id ? 'selected' : '' }}>{{ $b->nama_bangunan }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('ruangan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
