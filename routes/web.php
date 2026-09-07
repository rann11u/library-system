<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\MembersController;

Route::get('/', function () {
    return view('welcome');
});

// route mengakses class
Route::get('/books', [BookController::class, 'index']);

Route::get('/categories', [CategoriesController::class, 'index']);

Route::get('/members', [MembersController::class, 'index']);