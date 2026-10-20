<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index (){
        //member count
        $countMembers = 5;

        //count books
        $totalBooks = Book::sum('stock');

        //get all book with category
        $totalCatgories = Category::count('id');

        return view('dashboard.index', compact('totalBooks', 'totalCatgories', 'countMembers'));
    }
}
