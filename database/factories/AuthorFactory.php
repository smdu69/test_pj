<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Author::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'f' => $this->faker->title,
            'i' => $this->faker->firstName,
            'o' => $this->faker->lastName,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
