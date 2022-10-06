<?php

namespace Database\Seeders;

use App\Models\BookGenre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookGenreSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pivot = [
            [
                'book_id' => 1,
                'genre_id' => 1
            ],
            [
                'book_id' => 1,
                'genre_id' => 2
            ],
            [
                'book_id' => 2,
                'genre_id' => 1
            ],
            [
                'book_id' => 2,
                'genre_id' => 3
            ],
            [
                'book_id' => 3,
                'genre_id' => 2
            ],
            [
                'book_id' => 4,
                'genre_id' => 1
            ],
            [
                'book_id' => 5,
                'genre_id' => 3
            ],
            [
                'book_id' => 6,
                'genre_id' => 1
            ],
            [
                'book_id' => 2,
                'genre_id' => 8
            ],
            [
                'book_id' => 3,
                'genre_id' => 7
            ]

        ];

        foreach ($pivot as $key => $value) {
            BookGenre::create($value);
        }
    }
}
