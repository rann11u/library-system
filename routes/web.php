<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', function() {
    // return 'Ini daftar buku';
    return view('books.index');
});

Route::get('/categories', function(){
    return view('categories.index');
});

Route::get('/members', function() {
    return view('members.index');
});

Route::get('/books', [BookController::class, 'index']);