@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Kategori</h2>
    <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah</a>
    <table class="table mt-3">
        <tr>
            <th>ID</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
        @foreach($kategori as $k)
        <tr>
            <td>{{ $k->id }}</td>
            <td>{{ $k->nama_kategori }}</td>
            <td>
                <a href="{{ route('kategori.edit',$k->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('kategori.destroy',$k->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
