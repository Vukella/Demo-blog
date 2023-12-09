<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model =  Blog::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'tag_id' => Tag::factory(),
            'title' => $this->faker->unique()->sentence(),
            'slug' => $this->faker->unique()->slug(),
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(6)) . '</p>'
        ];
    }
}
