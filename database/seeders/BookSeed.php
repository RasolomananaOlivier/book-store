<?php

namespace Database\Seeders;

use App\Models\Book;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class BookSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $books = [
            [
                'title' => 'hey man',
                'total_pages' => 190,
                'rating' => 4,
                'published_date' => '2014-12-05',
                'isbn' => false,
                'publisher_id' => 1,
                'author_id' => 1
            ], [
                'title' => 'John wick',
                'total_pages' => 200,
                'rating' => 5,
                'published_date' => '2010-10-09',
                'isbn' => false,
                'publisher_id' => 1,
                'author_id' => 2
            ], [
                'title' => 'Big brother',
                'total_pages' => 100,
                'rating' => 2,
                'published_date' => '2009-09-01',
                'isbn' => false,
                'publisher_id' => 2,
                'author_id' => 1
            ],
            [
                'title' => 'One Upon time',
                'total_pages' => 100,
                'rating' => 2,
                'published_date' => '2009-09-01',
                'isbn' => false,
                'publisher_id' => 1,
                'author_id' => 3
            ],
            [
                'title' => 'hey man 12',
                'total_pages' => 990,
                'rating' => 4,
                'published_date' => '2015-12-05',
                'isbn' => true,
                'publisher_id' => 1,
                'author_id' => 1
            ],
            [
                'title' => 'Big brother 2',
                'total_pages' => 120,
                'rating' => 5,
                'published_date' => '2009-09-01',
                'isbn' => false,
                'publisher_id' => 2,
                'author_id' => 1
            ],
        ];

        foreach ($books as $key => $value) {
            Book::create($value);
        }
    }
}
