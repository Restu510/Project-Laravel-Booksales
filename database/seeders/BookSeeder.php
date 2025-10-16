<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => "Harry Potter and the Sorcerer's Stone",
            'description' => 'Petualangan pertama Harry Potter di dunia sihir.',
            'price' => 150000,
            'stock' => 10,
            'cover_photo' => 'https://m.media-amazon.com/images/I/81iqZ2HHD-L.jpg',
            'genre_id' => 1,
            'author_id' => 1,
        ]);

        Book::create([
            'title' => "A Game of Thrones",
            'description' => 'Intrik politik dan perebutan kekuasaan di Westeros.',
            'price' => 175000,
            'stock' => 8,
            'cover_photo' => 'https://m.media-amazon.com/images/I/91dSMhdIzTL._AC_UF1000,1000_QL80_.jpg',
            'genre_id' => 2,
            'author_id' => 2,
        ]);

        Book::create([
            'title' => "The Hobbit",
            'description' => 'Perjalanan Bilbo Baggins menuju Gunung Sunyi.',
            'price' => 120000,
            'stock' => 12,
            'cover_photo' => 'https://m.media-amazon.com/images/I/81t2CVWEsUL.jpg',
            'genre_id' => 3,
            'author_id' => 4,
        ]);

        Book::create([
            'title' => "Murder on the Orient Express",
            'description' => 'Kasus misteri klasik yang diselidiki oleh Hercule Poirot.',
            'price' => 95000,
            'stock' => 6,
            'cover_photo' => 'https://m.media-amazon.com/images/I/418gG3dQKyL._SY445_SX342_FMwebp_.jpg',
            'genre_id' => 4,
            'author_id' => 3,
        ]);

        Book::create([
            'title' => "The Da Vinci Code",
            'description' => 'Petualangan Robert Langdon dalam memecahkan misteri kuno.',
            'price' => 140000,
            'stock' => 7,
            'cover_photo' => 'https://m.media-amazon.com/images/I/91FWKxNXR9L._SL1500_.jpg',
            'genre_id' => 5,
            'author_id' => 5,
        ]);
    }
}
