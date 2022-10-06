<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [
            [
                'first_name' => 'John',
                'middle_name' => 'big',
                'last_name' => 'Dave',
                'user_id' => 1
            ],
            [
                'first_name' => 'Jane',
                'middle_name' => 'big',
                'last_name' => 'Doe',
                'user_id' => 2
            ],
            [
                'first_name' => 'Matthew',
                'last_name' => 'Smith',
                'user_id' => 3
            ],
        ];

        foreach ($authors as $key => $value) {
            Author::create($value);
        }
    }
}
