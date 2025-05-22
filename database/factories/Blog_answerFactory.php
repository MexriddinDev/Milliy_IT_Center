<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog_answer;

class Blog_answerFactory extends Factory
{
    protected $model = Blog_answer::class;

    public function definition(): array
    {
        return [
            'blog_question_id' => 1,
            'text' => $this->faker->sentence,
        ];
    }
}
