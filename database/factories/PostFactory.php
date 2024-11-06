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
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
//            'published_at' => now(),
//            'author_id' => \App\Models\User::factory(),
//            'category_id' => \App\Models\Category::factory(),
//            'image_url' => 'https://example.com/image.jpg',
        ];
    }
}
