<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'post_id' => \App\Models\Post::factory(),
            'content' => $this->faker->paragraph,
            'like_count' => $this->faker->numberBetween(0, 100),
        ];
    }
}
