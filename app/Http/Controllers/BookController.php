<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['author', 'genre'])->get();

        return response()->json([
            'success' => true,
            'data' => $books
        ], 200);
    }

    public function show($id)
    {
        $book = Book::with(['author', 'genre'])->findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $book
        ], 200);
    }
}
