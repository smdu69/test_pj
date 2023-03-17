<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name'       => $this->faker->sentence(2),
            'author'     => rand(1, 10),
            'co_author'  => $this->json_for_co_author(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    private function json_for_co_author() : string
    {
        $array = range(1, 10);
        $array = array_slice($array, rand(1,10), rand(1,10));

        return implode(',', $array);
    }
}
