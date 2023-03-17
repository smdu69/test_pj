<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::create([
            'name' => 'John Doe',
        ]);

        Author::create([
            'name' => 'Jane Smith',
        ]);

        Author::create([
            'name' => 'J.K. Rowling',
        ]);
    }
}
