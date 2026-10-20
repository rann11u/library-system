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
            <input type="text" name="title" value="{{ old('title') }}" required>
            
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Kategori Buku</label><br>
            <select name="category_id" id="">
                <option value="">Pilih Kategori</option>

                @foreach ($categories as $category)
                    <option 
                        value="{{ $category->id }}"
                        @selected(old('category_id') == $category->id)
                    >
                        {{ $category->name}}
                    </option>
                @endforeach
            </select>
            
            @error('category_id')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Penulis</label><br>
            <input type="text" name="author" value="{{ old('author') }}" required>

            @error('author')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Tahun</label><br>
            <input type="number" name="year" value="{{ old('year') }}" required>

            @error('year')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Stok</label><br>
            <input type="number" name="stock" min="0" value="{{ old('stock') }}" required>

            @error('stock')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan</button>
        <a href="{{ route('books.index') }}">Batal</a>
    </form>

@endsection
</form>
</body>
</html>