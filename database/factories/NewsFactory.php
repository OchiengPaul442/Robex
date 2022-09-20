<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\news>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'newstitle' => fake()->name(),
            'authorsname' => fake()->name(),
            'briefdescription' => fake()->text(),
            'newsarticle' => fake()->text(),
            'image_path' => fake()->imageUrl(),
        ];
    }
}
