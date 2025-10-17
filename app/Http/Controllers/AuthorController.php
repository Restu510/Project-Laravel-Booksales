<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        return response()->json([
            'success' => true,
            'data' => $authors
        ], 200);
    }

    public function show($id)
    {
        $author = Author::findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $author
        ], 200);
    }
}
