<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'article_id' => function(){
                return Article::factory()->create()->id;
            },
            'user_id' => function(){
                return User::factory()->create()->id;
            },
            'body' => fake()->paragraph
        ];
    }
}
