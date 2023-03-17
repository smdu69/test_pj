<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'The Great Gatsby',
            'author_id' => 1,
        ]);

        Book::create([
            'title' => 'To Kill a Mockingbird',
            'author_id' => 2,
        ]);
    }
}
