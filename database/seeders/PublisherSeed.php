<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publishers = [
            [
                'name' => 'BBC'
            ],
            [
                'name' => 'Google'
            ]
        ];

        foreach ($publishers as $key => $value) {
            Publisher::create($value);
        }
    }
}
