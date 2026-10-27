<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.submit');
});

Route::post('/logout', [AuthController::class, 'logout'])   
    ->middleware('auth')
    ->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
    return view('welcome');
    });

    // route mengakses class
    Route::resource('books', BookController::class);

    Route::get('/categories', [CategoriesController::class, 'index']);

    Route::get('/members', [MembersController::class, 'index']);
    Route::get('/members/{id}', [MembersController::class, 'show']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});

