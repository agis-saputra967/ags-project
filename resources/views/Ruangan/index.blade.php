@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-header bg-success text-white py-3 rounded-top-4 d-flex justify-content-between align-items-center">
            <h4 class="mb-0">🏢 Data Ruangan</h4>

            {{-- Jika tombol tambah ingin diaktifkan tinggal hapus komentar --}}
            {{-- 
            <a href="{{ route('ruangan.create') }}" class="btn btn-light text-success fw-semibold px-3 rounded-3">
                + Tambah Ruangan
            </a>
            --}}
        </div>

        <div class="card-body p-4">

            <table class="table table-hover table-bordered rounded-3 overflow-hidden">
                <thead class="table-light">
                    <tr>
                        <th width="60">ID</th>
                        <th>Nama Ruangan</th>
                        <th>Kode Ruangan</th>
                        <th>Bangunan</th>
                        <th width="160">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($ruangan as $r)
                    <tr>
                        <td>{{ $r->id }}</td>
                        <td>{{ $r->nama_ruangan }}</td>
                        <td>{{ $r->kode_ruangan }}</td>
                        <td>{{ $r->bangunan->nama_bangunan ?? '-' }}</td>
                        <td>
                            <a href="{{ route('ruangan.edit',$r->id) }}" 
                               class="btn btn-warning btn-sm px-3">
                               Edit
                            </a>

                            <form action="{{ route('ruangan.destroy',$r->id) }}"
                                  method="POST"
                                  style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm px-3"
                                    onclick="return confirm('Yakin ingin menghapus ruangan ini?')">
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
@endsection
