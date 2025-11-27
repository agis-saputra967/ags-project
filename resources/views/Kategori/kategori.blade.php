@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-header bg-primary text-white py-3 rounded-top-4 d-flex justify-content-between align-items-center">
            <h4 class="mb-0">📂 Data Kategori</h4>
            <a href="{{ route('kategori.create') }}" class="btn btn-light text-primary fw-semibold px-3 rounded-3">
                + Tambah Kategori
            </a>
        </div>

        <div class="card-body p-4">

            <table class="table table-hover table-bordered rounded-3 overflow-hidden">
                <thead class="table-light">
                    <tr>
                        <th width="60">ID</th>
                        <th>Nama Kategori</th>
                        <th width="160">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($kategori as $k)
                    <tr>
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->nama_kategori }}</td>
                        <td>
                            <a href="{{ route('kategori.edit',$k->id) }}" class="btn btn-warning btn-sm px-3">
                                Edit
                            </a>

                            <form action="{{ route('kategori.destroy',$k->id) }}" 
                                  method="POST" 
                                  style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm px-3"
                                        onclick="return confirm('Yakin ingin menghapus kategori ini?')">
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
