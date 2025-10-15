<?php

namespace App\Models;

class Author
{
    public static function getAll()
    {
        return [
            ['id' => 1, 'name' => 'Brandon Sanderson'],
            ['id' => 2, 'name' => 'J.K. Rowling'],
            ['id' => 3, 'name' => 'Stephen King'],
            ['id' => 4, 'name' => 'H.P. Lovecraft'],
            ['id' => 5, 'name' => 'Kentaro Miura'],
        ];
    }
}
