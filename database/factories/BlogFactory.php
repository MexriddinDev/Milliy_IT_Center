<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog_category;

class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition()
    {
        return [
            'blog_category_id' => Blog_category::factory(),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(),
            'recorded_by' => $this->faker->name(),
        ];
    }
}
