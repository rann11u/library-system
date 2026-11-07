@extends('layouts.app')

@section('title', 'Library System Dashboard')

@section('content')

@if (session('success'))
    <script>
        alert(@json(session('success')));
    </script>
@endif

<h2>Library System Dashboard</h2>
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
    <p>Jumlah Kategori: {{ $totalCatgories }}</p>
@else
    <p>Belum ada kategori.</p>
@endif

@endsection
