<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog_question;

class Blog_questionFactory extends Factory
{
    protected $model = Blog_question::class;

    public function definition(): array
    {
        return [
            'blog_id' => 1,
            'text' => $this->faker->sentence,
        ];
    }
}
