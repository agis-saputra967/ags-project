@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Ruangan</h2>
    {{-- <a href="{{ route('ruangan.create') }}" class="btn btn-primary">Tambah</a> --}}
    <table class="table mt-3">
        <tr>
            <th>ID</th>
            <th>Nama Ruangan</th>
            <th>Kode Ruangan</th>
            <th>Bangunan</th>
            <th>Aksi</th>
        </tr>
        @foreach($ruangan as $r)
        <tr>
            <td>{{ $r->id }}</td>
            <td>{{ $r->nama_ruangan }}</td>
            <td>{{ $r->kode_ruangan }}</td>
            <td>{{ $r->bangunan->nama_bangunan ?? '-' }}</td>
            <td>
                <a href="{{ route('ruangan.edit',$r->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('ruangan.destroy',$r->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
