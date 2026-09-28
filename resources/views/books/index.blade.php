<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'Daftar Buku')
    </title>

    <link rel="stylesheet" href="{{ asset('css/books/style.css') }}">
</head>
<body>
    @extends('layouts.app')

    @section('content')

    <h2>Daftar Buku</h2>

    <table class="book-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Id buku</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if($stock > 0)
        <p class="stock-info">Stok tersedia: {{ $stock }}</p>
    @else
        <p class="stock-empty">Stok habis.</p>
    @endif

    @endsection
</body>
</html>

