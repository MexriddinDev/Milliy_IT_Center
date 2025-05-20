<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\Blog_question;
use Illuminate\Database\Eloquent\Factories\Factory;

class Blog_questionFactory extends Factory
{
    protected $model = Blog_question::class;

    public function definition()
    {
        $blog = Blog::factory()->create();

        return [
            'blog_id' => $blog->id,
            'text' => $this->faker->sentence,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
