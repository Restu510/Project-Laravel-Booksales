<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Author;

class HomeController extends Controller
{
    public function index()
    {
        $genres = Genre::getall();
        $authors = Author::getall();

        return view('home', compact('genres', 'authors'));
    }
}
