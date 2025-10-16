<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Fantasy', 
            'description' => 'Cerita dengan unsur sihir, dunia lain, atau makhluk mistis.'
        ]);

        Genre::create([
            'name' => 'Mystery', 
            'description' => 'Cerita dengan teka-teki dan penyelidikan.'
        ]);

        Genre::create([
            'name' => 'Romance', 
            'description' => 'Kisah cinta dan hubungan emosional.'
        ]);

        Genre::create([
            'name' => 'Science Fiction', 
            'description' => 'Cerita dengan teknologi dan masa depan.'
        ]);

        Genre::create([
            'name' => 'Horror', 
            'description' => 'Cerita menakutkan, sering melibatkan unsur supranatural.'
        ]);

        Genre::create([
            'name' => 'Thriller', 
            'description' => 'Cerita penuh ketegangan dan kejutan.'
        ]);

        Genre::create([
            'name' => 'Classic', 
            'description' => 'Karya sastra lama yang tetap relevan sepanjang masa.'
        ]);

        Genre::create([
            'name' => 'Adventure', 
            'description' => 'Kisah perjalanan dan petualangan seru.'
        ]);

        Genre::create([
            'name' => 'Drama', 
            'description' => 'Cerita dengan fokus pada konflik dan emosi manusia.'
        ]);

        Genre::create([
            'name' => 'Historical', 
            'description' => 'Cerita yang berlatar belakang sejarah.'
        ]);
    }
}
