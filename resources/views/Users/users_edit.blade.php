@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit Data User</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" 
                           class="form-control" 
                           id="name" 
                           name="name" 
                           value="{{ $user->name }}" 
                           required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" 
                           class="form-control" 
                           id="email" 
                           name="email" 
                           value="{{ $user->email }}" 
                           required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">
                        Password <small class="text-muted">(kosongkan jika tidak ingin mengubah)</small>
                    </label>
                    <input type="password" 
                           class="form-control" 
                           id="password" 
                           name="password" 
                           placeholder="Isi jika ingin mengganti password">
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-control" id="role" name="role" required>
                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="operator" {{ $user->role == 'operator' ? 'selected' : '' }}>Operator</option>
                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                    </select>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary me-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection
