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

    <div class="table-actions">
        <a href="{{ route('books.create') }}" class="btn btn-add">+ Tambah Buku</a>
    </div>

    <h2>Daftar Buku</h2>

    <table class="book-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Id buku</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>
                        <p>{{ $book->category?->name ?? 'Belum ada kategori' }}</p>
                    </td> 
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->stock }}</td>
                    <td class="action-cell">
                        <a href="{{ route('books.edit', $book) }}" class="btn btn-edit">Edit</a>

                        <form action="{{ route('books.destroy', $book) }}" method="POST"
                            onsubmit="return confirm('Yakin hapus buku ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if($totalBooks > 0)
        <p class="stock-info">Stok tersedia: {{ $totalBooks }}</p>
    @else
        <p class="stock-empty">Stok habis.</p>
    @endif

    @endsection
</body>
</html>

