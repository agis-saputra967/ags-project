@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Data Users</h4>
            <a href="{{ route('users.create') }}" class="btn btn-light btn-sm">
                + Tambah User
            </a>
        </div>

        <div class="card-body">

            <table class="table table-hover table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="60">ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th width="120">Role</th>
                        <th width="160">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $u)
                    <tr>
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td>
                            <span class="badge 
                                @if($u->role == 'admin') bg-danger 
                                @elseif($u->role == 'operator') bg-warning 
                                @else bg-secondary @endif
                            ">
                                {{ ucfirst($u->role) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('users.edit',$u->id) }}" class="btn btn-warning btn-sm me-1">
                                Edit
                            </a>

                            <form action="{{ route('users.destroy',$u->id) }}" 
                                  method="POST" 
                                  style="display:inline">
                                @csrf 
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus user ini?')">
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
