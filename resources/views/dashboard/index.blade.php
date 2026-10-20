@extends('layouts.app')

@section('title', 'Library System Dashboard')

@section('content')

    <h2>Library Sytem Dashboard</h2>
    <p>Selamat datang di Sistem Informasi Perpustakaan.</p>

    @if($totalBooks > 0)
        <p>Stok Buku yang tersedia: {{ $totalBooks }}</p>
    @else
        <p>Stok habis.</p>
    @endif

    @if($countMembers > 0)
        <p>Jumlah Member: {{ $countMembers }}</p>
    @else
        <p>Member 0</p>
    @endif

    @if($totalCatgories > 0)
        <p>Jumlah Kategori {{ $totalCatgories }}</p>
    @else
        <p>Stok habis.</p>
    @endif

@endsection