@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Bangunan</h2>
    <a href="{{ route('bangunan.create') }}" class="btn btn-primary">Tambah</a>
    <table class="table mt-3">
        <tr>
            <th>ID</th>
            <th>Nama Bangunan</th>
            <th>Kode Bangunan</th>
            <th>Tanah</th>
            <th>Aksi</th>
        </tr>
        @foreach($bangunan as $b)
        <tr>
            <td>{{ $b->id }}</td>
            <td>{{ $b->nama_bangunan }}</td>
            <td>{{ $b->kode_bangunan }}</td>
            <td>{{ $b->tanah->nama_tanah ?? '-' }}</td>
            <td>
                <a href="{{ route('bangunan.edit',$b->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('bangunan.destroy',$b->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
