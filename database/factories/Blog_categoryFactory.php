<?php

namespace Database\Factories;

use App\Models\Blog_category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog_categoryFactory extends Factory
{

    protected $model = Blog_category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
