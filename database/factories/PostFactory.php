<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'category_id' => \App\Models\Category::factory(),
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'view_count' => $this->faker->numberBetween(0, 1000),
            'like_count' => $this->faker->numberBetween(0, 500),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
