@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah Data Tanah</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('tanah.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama_tanah" class="form-label">Nama Tanah</label>
                    <input type="text" class="form-control" id="nama_tanah" name="nama_tanah" required>
                </div>

                <div class="mb-3">
                    <label for="kode_tanah" class="form-label">Kode Tanah</label>
                    <input type="text" class="form-control" id="kode_tanah" name="kode_tanah" required>
                </div>

                <div class="mb-3">
                    <label for="luas" class="form-label">Luas</label>
                    <input type="text" class="form-control" id="luas" name="luas" required>
                </div>

                <div class="mb-3">
                    <label for="no_sertifikat" class="form-label">No Sertifikat</label>
                    <input type="text" class="form-control" id="no_sertifikat" name="no_sertifikat" required>
                </div>

                <div class="d-flex justify-content-end mt-3">
                    <a href="{{ route('tanah.index') }}" class="btn btn-secondary me-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
