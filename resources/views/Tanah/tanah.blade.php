@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Tanah</h2>
    <a href="{{ route('tanah.create') }}" class="btn btn-primary">Tambah</a>
    <table class="table mt-3">
        <tr>
            <th>ID</th>
            <th>Nama Tanah</th>
            <th>Kode Tanah</th>
            <th>Luas</th>
            <th>No Sertifikat</th>
            <th>Aksi</th>
        </tr>
        @foreach($tanah as $t)
        <tr>
            <td>{{ $t->id }}</td>
            <td>{{ $t->nama_tanah }}</td>
            <td>{{ $t->kode_tanah }}</td>
            <td>{{ $t->luas }}</td>
            <td>{{ $t->no_sertifikat }}</td>
            <td>
                <a href="{{ route('tanah.edit',$t->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('tanah.destroy',$t->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
