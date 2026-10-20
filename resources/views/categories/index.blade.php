<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Buku</title>

    <link rel="stylesheet" href="{{ asset('css/books/style.css') }}">
</head>
<body>
    @extends('layouts.app')

    @section('title', 'Kategori Buku')

    @section('content')

    <style>
        .category-page .page-description {
            text-align: center;
            color: #666;
            margin: 0 0 8px;
        }

        .category-page .book-table {
            max-width: 700px;
        }

        .category-page .book-table th:first-child,
        .category-page .book-table td:first-child {
            width: 70px;
        }

        .category-page .book-table th:last-child,
        .category-page .book-table td:last-child {
            width: 160px;
            text-align: center !important;
        }

        .category-page .book-table td.stock-info,
        .category-page .book-table td.stock-empty {
            text-align: center !important;
        }
    </style>

    <div class="category-page">

        <h2>{{ $title }}</h2>
        <p class="page-description">{{ $description }}</p>

        <table class="book-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Jumlah Buku</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                    @php $total = $category->books->count(); @endphp
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td class="{{ $total > 0 ? 'stock-info' : 'stock-empty' }}">{{ $total }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="stock-empty">Belum ada kategori.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        @if ($categories->count() > 0)
            <p class="stock-info">Total kategori: {{ $categories->count() }}</p>
        @else
            <p class="stock-empty">Belum ada kategori.</p>
        @endif

    </div>
    @endsection
</body>
</html>