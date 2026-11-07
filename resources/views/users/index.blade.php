@extends('layouts.app')

@section('title', 'Daftar Pengguna')

@section('content')

<link rel="stylesheet" href="{{ asset('css/users/style.css') }}">

@if (session('success'))
    <div class="alert-success">{{ session('success') }}</div>
@endif

<div class="page-header">
    <h2>Daftar Pengguna</h2>
    <a href="{{ route('users.create') }}" class="btn btn-add">+ Tambah Pengguna</a>
</div>

<table class="user-table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Dibuat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><span class="badge badge-{{ $user->role }}">{{ ucfirst($user->role) }}</span></td>
                <td>{{ $user->created_at->format('d M Y') }}</td>
                <td class="action-cell">
                    <a href="{{ route('users.edit', $user) }}" class="btn btn-edit">Edit</a>

                    <form action="{{ route('users.destroy', $user) }}" method="POST"
                        onsubmit="return confirm('Yakin hapus pengguna {{ $user->name }}?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="empty-row">Belum ada pengguna.</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection

