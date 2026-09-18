<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $title = "Daftar Buku";
        $description = "Daftar buku yang tersedia di perpustakaan";
        $books = [
            'Pemrograman PHP',
            'Laravel untuk Pemula',
            'Basis Data',
            'Algoritma dan Pemrograman',
            'Pemrograman Berorientasi Objek',
            'Habis gelap terbitlah terang',
            'Atomic Habits',
            'Madilog'
        ]; 

        $authors = [
            'Budi Raharjo',
            'Rian Ariona',
            'Fathansyah',
            'Rinaldi Munir',
            'Rosa A.S.',
            'R.A. Kartini',
            'James Clear',
            'Tan Malaka'
        ];

        $years = [
            2018,
            2021,
            2015,
            2016,
            2019,
            1911,
            2018,
            1943
        ];

        $stock = 8;

        return view('books.index', compact('title', 'description', 'books', 'stock', 'authors', 'years'));
    }

    public function show($id){
        return 'Detail Buku <br> ID Buku: ' . $id;
    }
}
