<?php

namespace Database\Seeders;

use App\Models\CoAuthor;
use Illuminate\Database\Seeder;

class CoAuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CoAuthor::create([
            'book_id' => 1,
            'author_id' => 2,
        ]);

        CoAuthor::create([
            'book_id' => 1,
            'author_id' => 3,
        ]);

        CoAuthor::create([
            'book_id' => 2,
            'author_id' => 1,
        ]);
    }
}
