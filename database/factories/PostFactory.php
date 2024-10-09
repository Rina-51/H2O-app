<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->randomElement([1, 2]),
            'type_id' => fake()->numberBetween(1, 4),
            'title' => fake()->word,
            'body' => fake()->text(),
            'image_url' => "https://www.irasutoya.com/2019/10/blog-post_434.h"
            //
        ];
    }
}
