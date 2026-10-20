<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    // Read Book
    public function index() {
        //Title and description
        $title = "Daftar Buku";
        $description = "Daftar buku yang tersedia di perpustakaan";

        //count books
        $totalBooks = Book::sum('stock');

        //get all book with category
        $books = Book::with('category')->get();

        return view('books.index', compact('books', 'totalBooks'));
    }

    //show id
    public function show($id){
        $idBooks = $id;

        return view('books.show', compact('idBooks'));
    }

    // Create book
    public function create(){
        $title = "Tambah Buku";
        $categories = Category::orderBy('name')->get();

        return view('books.create', compact('categories'));
    }

    public function store (Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:books,title',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
            'stock' => 'required|integer|min:1|max:100000',
            'category_id' => 'required|exists:categories,id',
        ]);

        Book::create($validated);

        return redirect()
            ->route('books.index')
            ->with('success', 'Data buku berhasil ditambahkan.');
    }

    // Update book
    public function edit(Book $book){
        $categories = Category::orderBy('name')->get();

        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book){
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:books,title,' . $book->id,
            'author' => 'required|string|max:255',
            'year' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
            'stock' => 'required|integer|min:0|max:100000',
            'category_id' => 'required|exists:categories,id',
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