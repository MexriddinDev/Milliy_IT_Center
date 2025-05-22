<?php

// database/factories/CommentFactory.php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = \App\Models\Comment::class;

    public function definition()
    {
        return [
            'company_id' => \App\Models\Company::factory(), // factory yordamida company yaratadi
            'stars' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->sentence,
        ];
    }
}
