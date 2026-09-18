@extends('layouts.app')

@section('title', 'Library System Dashboard')

@section('content')

    <h2>Library Sytem Dashboard</h2>
    <p>Selamat datang di Sistem Informasi Perpustakaan.</p>

    @if($stockBook > 0)
        <p>Stok Buku yang tersedia: {{ $stockBook }}</p>
    @else
        <p>Stok habis.</p>
    @endif

    @if($countMembers > 0)
        <p>Jumlah Member: {{ $countMembers }}</p>
    @else
        <p>Member 0</p>
    @endif

    @if($countCategories > 0)
        <p>Jumlah Kategori {{ $countCategories }}</p>
    @else
        <p>Stok habis.</p>
    @endif

@endsection