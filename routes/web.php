<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/author', [AuthorController::class, 'index']);
Route::get('/book', [BookController::class, 'index']);
Route::get('/genre', [GenreController::class, 'index']);