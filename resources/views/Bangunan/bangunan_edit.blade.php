@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Bangunan</h2>
    <form action="{{ route('bangunan.update', $bangunan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_bangunan" class="form-label">Nama Bangunan</label>
            <input type="text" class="form-control" id="nama_bangunan" name="nama_bangunan" value="{{ $bangunan->nama_bangunan }}" required>
        </div>
        <div class="mb-3">
            <label for="kode_bangunan" class="form-label">Kode Bangunan</label>
            <input type="text" class="form-control" id="kode_bangunan" name="kode_bangunan" value="{{ $bangunan->kode_bangunan }}" required>
        </div>
        <div class="mb-3">
            <label for="tanah_id" class="form-label">Tanah</label>
            <select class="form-control" id="tanah_id" name="tanah_id" required>
                <option value="">Pilih Tanah</option>
                @foreach($tanah as $t)
                    <option value="{{ $t->id }}" {{ $bangunan->tanah_id == $t->id ? 'selected' : '' }}>{{ $t->nama_tanah }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('bangunan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
