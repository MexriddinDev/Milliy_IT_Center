<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\Blog_category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition()
    {
        $category = Blog_category::factory()->create();

        return [
            'blog_category_id' => $category->id,
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(),
            'recorded_by' => $this->faker->name,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
