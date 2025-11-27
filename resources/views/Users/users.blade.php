@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Users</h2>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah</a>
    <table class="table mt-3">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
        @foreach($users as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->role }}</td>
            <td>
                <a href="{{ route('users.edit',$u->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('users.destroy',$u->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
