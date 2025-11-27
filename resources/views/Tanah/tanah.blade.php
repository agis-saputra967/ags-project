@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Data Tanah</h4>
            <a href="{{ route('tanah.create') }}" class="btn btn-light btn-sm">
                <i class="bi bi-plus-circle"></i> Tambah
            </a>
        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Nama Tanah</th>
                            <th>Kode Tanah</th>
                            <th>Luas</th>
                            <th>No Sertifikat</th>
                            <th style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($tanah as $t)
                        <tr>
                            <td>{{ $t->id }}</td>
                            <td>{{ $t->nama_tanah }}</td>
                            <td>{{ $t->kode_tanah }}</td>
                            <td>{{ $t->luas }}</td>
                            <td>{{ $t->no_sertifikat }}</td>
                            <td>
                                <a href="{{ route('tanah.edit', $t->id) }}" class="btn btn-warning btn-sm me-1">
                                    Edit
                                </a>

                                <form action="{{ route('tanah.destroy', $t->id) }}" 
                                      method="POST" 
                                      style="display:inline-block;">
                                    @csrf 
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin hapus?')">
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
