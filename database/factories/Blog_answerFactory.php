<?php

namespace Database\Factories;

use App\Models\Blog_question;
use App\Models\Blog_answer;
use Illuminate\Database\Eloquent\Factories\Factory;

class Blog_answerFactory extends Factory
{
    protected $model = Blog_answer::class;

    public function definition()
    {
        $question = Blog_question::factory()->create();

        return [
            'blog_question_id' => $question->id,
            'text' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
