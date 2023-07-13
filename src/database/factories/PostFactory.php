<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Modules\Post\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Modules\Post\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'content' => fake()->text(),
            'user_id' => fake()->numberBetween(1, 10),
        ];
    }

}
