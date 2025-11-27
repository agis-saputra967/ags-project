@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-header bg-primary text-white rounded-top-4 py-3">
            <h4 class="mb-0">✏️ Edit Data Barang</h4>
        </div>

        <div class="card-body p-4">

            <form action="{{ route('barang.update', $barang->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Nama Barang</label>
                        <input type="text" class="form-control form-control-lg" name="nama_barang"
                            value="{{ $barang->nama_barang }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Kode Barang</label>
                        <input type="text" class="form-control form-control-lg" name="kode_barang"
                            value="{{ $barang->kode_barang }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Kategori</label>
                        <select class="form-select form-select-lg" name="kategori_id" required>
                            <option value="">Pilih Kategori</option>
                            @foreach($kategori as $k)
                                <option value="{{ $k->id }}" {{ $barang->kategori_id == $k->id ? 'selected' : '' }}>
                                    {{ $k->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Ruangan</label>
                        <select class="form-select form-select-lg" name="ruangan_id" required>
                            <option value="">Pilih Ruangan</option>
                            @foreach($ruangan as $r)
                                <option value="{{ $r->id }}" {{ $barang->ruangan_id == $r->id ? 'selected' : '' }}>
                                    {{ $r->nama_ruangan }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Tanggal Perolehan</label>
                        <input type="date" class="form-control form-control-lg" name="tanggal_perolehan"
                            value="{{ $barang->tanggal_perolehan }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Jumlah</label>
                        <input type="number" class="form-control form-control-lg" name="jumlah"
                            value="{{ $barang->jumlah }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Satuan</label>
                        <input type="text" class="form-control form-control-lg" name="satuan"
                            value="{{ $barang->satuan }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Kondisi</label>
                        <input type="text" class="form-control form-control-lg" name="kondisi"
                            value="{{ $barang->kondisi }}" required>
                    </div>

                </div>

                <div class="mt-4 d-flex justify-content-end gap-2">
                    <a href="{{ route('barang.index') }}" class="btn btn-secondary px-4 py-2 rounded-3">
                        Batal
                    </a>
                    <button class="btn btn-primary px-4 py-2 rounded-3">
                        Update
                    </button>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection
