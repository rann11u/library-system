@extends('layouts.app')

@section('title', 'Edit Pengguna')

@section('content')

<link rel="stylesheet" href="{{ asset('css/users/style.css') }}">

<div class="form-container">
    <div class="page-header">
        <h2>Edit Pengguna</h2>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">← Kembali</a>
    </div>

    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name"
                value="{{ old('name', $user->name) }}" required>
            @error('name') <p class="error">{{ $message }}</p> @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email"
                value="{{ old('email', $user->email) }}" required>
            @error('email') <p class="error">{{ $message }}</p> @enderror
        </div>

        <div class="form-group">
            <label for="password">Password Baru <small>(kosongkan jika tidak diubah)</small></label>
            <input type="password" name="password" id="password" placeholder="Minimal 8 karakter">
            @error('password') <p class="error">{{ $message }}</p> @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Konfirmasi Password Baru</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" required>
                <option value="admin"    {{ old('role', $user->role) == 'admin'    ? 'selected' : '' }}>Admin</option>
                <option value="petugas" {{ old('role', $user->role) == 'petugas' ? 'selected' : '' }}>Petugas</option>
            </select>
            @error('role') <p class="error">{{ $message }}</p> @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-edit">Update</button>
        </div>
    </form>
</div>

@endsection

