<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // Read Book
    public function index() {
        $title = "Daftar Buku";
        $description = "Daftar buku yang tersedia di perpustakaan";
        $totalBooks = Book::sum('stock');
        $books = Book::all();

        return view('books.index', compact('books', 'totalBooks'));
    }

    //show id
    public function show($id){
        $idBooks = $id;

        return view('books.show', compact('idBooks'));
    }

    // Create book
    public function create(){
        return view('books.create');
    }

    public function store (Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:books,title',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
            'stock' => 'required|integer|min:1|max:100000',
        ]);

        Book::create($validated);

        return redirect()
            ->route('books.index')
            ->with('success', 'Data buku berhasil ditambahkan.');
    }

    // Update book
    public function edit(Book $book){
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book){
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:books,title,' . $book->id,
            'author' => 'required|string|max:255',
            'year' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
            'stock' => 'required|integer|min:0|max:100000',
        ]);

        $book->update($validated);

        return redirect()->route('books.index');
    }

    // Delete book
    public function destroy(Book $book){
        $book->delete();

        return redirect()->route('books.index');
    }
}