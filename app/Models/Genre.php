<?php

namespace App\Models;

class Genre
{
    public static function getAll()
    {
        return [
            ['id' => 1, 'name' => 'Fantasy'],
            ['id' => 2, 'name' => 'Adventure'],
            ['id' => 3, 'name' => 'Romance'],
            ['id' => 4, 'name' => 'Sci-Fi'],
            ['id' => 5, 'name' => 'Horror'],
        ];
    }
}
