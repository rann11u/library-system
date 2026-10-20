<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index(){
        //Title kategori
        $title = "Daftar Kategori";
        $description = "Berikut daftar kategori di perpustakaan";

        //get all categories with books
        $categories = Category::with('books')->get();

        return view('categories.index', compact('categories', 'title', 'description'));
    }
}
