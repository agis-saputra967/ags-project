@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="card shadow-sm border-0 rounded-4 mx-auto" style="max-width: 550px;">
        <div class="card-header bg-primary text-white rounded-top-4 py-3">
            <h4 class="mb-0">➕ Tambah Data Kategori</h4>
        </div>

        <div class="card-body p-4">
            <form action="{{ route('kategori.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama_kategori" class="form-label fw-semibold">Nama Kategori</label>
                    <input type="text"
                           class="form-control rounded-3 py-2"
                           id="nama_kategori"
                           name="nama_kategori"
                           placeholder="Masukkan nama kategori"
                           required>
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('kategori.index') }}" class="btn btn-secondary px-4 py-2 rounded-3 me-2">
                        Batal
                    </a>

                    <button type="submit" class="btn btn-primary px-4 py-2 rounded-3">
                        Simpan
                    </button>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection
