@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah Data Ruangan</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('ruangan.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
                    <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" required>
                </div>

                <div class="mb-3">
                    <label for="kode_ruangan" class="form-label">Kode Ruangan</label>
                    <input type="text" class="form-control" id="kode_ruangan" name="kode_ruangan" required>
                </div>

                <div class="mb-3">
                    <label for="bangunan_id" class="form-label">Bangunan</label>
                    <select class="form-select" id="bangunan_id" name="bangunan_id" required>
                        <option value="">Pilih Bangunan</option>
                        @foreach($bangunan as $b)
                            <option value="{{ $b->id }}">{{ $b->nama_bangunan }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-end mt-3">
                    <a href="{{ route('ruangan.index') }}" class="btn btn-secondary me-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
