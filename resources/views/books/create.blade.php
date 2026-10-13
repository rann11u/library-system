<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'tambah buku')
    </title>
</head>
<body>
    @extends('layouts.app')
    
    @section('content')

    <h2>Tambah Buku</h2>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div>
            <label>Judul</label><br>
            <input type="text" name="title">
        </div>

        <div>
            <label>Penulis</label><br>
            <input type="text" name="author">
        </div>

        <div>
            <label>Tahun</label><br>
            <input type="number" name="year">
        </div>

        <div>
            <label>Stok</label><br>
            <input type="number" name="stock">
        </div>

        <button type="submit">Simpan</button>
        <a href="{{ route('books.index') }}">Batal</a>
    </form>

@endsection
</form>
</body>
</html>