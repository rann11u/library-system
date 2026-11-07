@extends('layouts.app')

@section('title', 'Tambah Pengguna')

@section('content')

<link rel="stylesheet" href="{{ asset('css/users/style.css') }}">

<div class="form-container">
    <div class="page-header">
        <h2>Tambah Pengguna</h2>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">← Kembali</a>
    </div>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name"
                value="{{ old('name') }}" placeholder="Nama lengkap" required>
            @error('name') <p class="error">{{ $message }}</p> @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email"
                value="{{ old('email') }}" placeholder="email@contoh.com" required>
            @error('email') <p class="error">{{ $message }}</p> @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password"
                placeholder="Minimal 8 karakter" required>
            @error('password') <p class="error">{{ $message }}</p> @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                placeholder="Ulangi password" required>
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" required>
                <option value="">-- Pilih Role --</option>
                <option value="admin"    {{ old('role') == 'admin'    ? 'selected' : '' }}>Admin</option>
                <option value="petugas" {{ old('role') == 'petugas' ? 'selected' : '' }}>Petugas</option>
            </select>
            @error('role') <p class="error">{{ $message }}</p> @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-add">Simpan</button>
        </div>
    </form>
</div>

@endsection

