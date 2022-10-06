<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            [
                'genre' => 'Thriller'
            ],
            [
                'genre' => 'Romance'
            ],
            [
                'genre' => 'Comedy'
            ],
            [
                'genre' => 'Business'
            ],
            [
                'genre' => 'Children'
            ],
            [
                'genre' => 'Fantasy'
            ],
            [
                'genre' => 'Fiction'
            ],
            [
                'genre' => 'History'
            ],
            [
                'genre' => 'Litterature'
            ],
            [
                'genre' => 'Mystery'
            ],
            [
                'genre' => 'Religion'
            ],
            [
                'genre' => 'Science Fiction'
            ],
            [
                'genre' => 'Travel'
            ],
            [
                'genre' => 'Suspense'
            ]

        ];

        foreach ($genres as $key => $value) {
            Genre::create($value);
        }
    }
}
