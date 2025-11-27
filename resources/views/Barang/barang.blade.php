@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-header bg-primary text-white rounded-top-4 py-3 d-flex justify-content-between align-items-center">
            <h4 class="mb-0">📦 Data Barang</h4>
            <a href="{{ route('barang.create') }}" class="btn btn-light text-primary fw-semibold px-3 py-2 rounded-3">
                + Tambah Barang
            </a>
        </div>

        <div class="card-body p-4">

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Nama Barang</th>
                            <th>Kode Barang</th>
                            <th>Kategori</th>
                            <th>Ruangan</th>
                            <th>Tanggal Perolehan</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Kondisi</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($barang as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td class="fw-semibold">{{ $item->nama_barang }}</td>
                            <td><span class="badge bg-secondary">{{ $item->kode_barang }}</span></td>
                            <td>{{ $item->kategori->nama_kategori ?? '-' }}</td>
                            <td>{{ $item->ruangan->nama_ruangan ?? '-' }}</td>
                            <td>{{ $item->tanggal_perolehan }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>{{ $item->satuan }}</td>

                            {{-- Badge kondisi otomatis warna --}}
                            <td>
                                @php
                                    $color = match(strtolower($item->kondisi)) {
                                        'baik' => 'success',
                                        'rusak' => 'danger',
                                        'perlu perbaikan' => 'warning',
                                        default => 'secondary'
                                    };
                                @endphp
                                <span class="badge bg-{{ $color }} px-3 py-2 text-capitalize">
                                    {{ $item->kondisi }}
                                </span>
                            </td>

                            <td class="text-center">
                                <a href="{{ route('barang.edit', $item->id) }}"
                                   class="btn btn-warning btn-sm px-3 rounded-3">
                                    Edit
                                </a>

                                <form action="{{ route('barang.destroy', $item->id) }}"
                                      method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm px-3 rounded-3"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>
@endsection
