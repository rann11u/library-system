<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'ubah buku')
    </title>
</head>
<body>
    @extends('layouts.app')

    @section('content')

    <h2>Edit Buku</h2>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Judul</label><br>
            <input type="text" name="title" value="{{ $book->title }}">
        </div>

        <div>
            <label>Penulis</label><br>
            <input type="text" name="author" value="{{ $book->author }}">
        </div>

        <div>
            <label>Tahun</label><br>
            <input type="number" name="year" value="{{ $book->year }}">
        </div>

        <div>
            <label>Stok</label><br>
            <input type="number" name="stock" value="{{ $book->stock }}">
        </div>

        <button type="submit">Update</button>
        <a href="{{ route('books.index') }}">Batal</a>
    </form>
@endsection
</form>
</body>
</html>