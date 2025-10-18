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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|string',
            'bio' => 'nullable|string',
        ]);

        $author = Author::create([
            'name' => $request->name,
            'photo' => $request->photo,
            'bio' => $request->bio,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Author berhasil ditambahkan!',
            'data' => $author
        ]);
    }
}
