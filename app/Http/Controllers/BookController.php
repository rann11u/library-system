<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        $title = "Daftar Buku";
        $description = "Daftar buku yang tersedia di perpustakaan";
        $books = Book::all();
        $stock = 33;

        return view('books.index', compact('books', 'stock'));
    }

    public function show($id){
        $idBooks = $id;

        return view('books.show', compact('idBooks'));
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'stock' => $request->stock,
        ]);

        return redirect()->route('books.index');
    }

    public function edit(Book $book){
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book){
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'stock' => $request->stock,
        ]);

        return redirect()->route('books.index');
    }

    public function destroy(Book $book){
        $book->delete();

        return redirect()->route('books.index');
    }


    // public function store (Request $request){
    //     $validated = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'author' => 'required|string|max:255',
    //         'year' => 'required|integer|min:1900',
    //         'stock' => 'required|integer|min:0',
    //     ]);

    //     Book:create($validated);

    //     return redirect()
    //         ->route('books.index')
    //         ->with('success', 'Data buku berhasil ditambahkan.');
    // }
}