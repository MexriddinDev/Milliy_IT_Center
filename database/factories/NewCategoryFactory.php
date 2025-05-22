<?php

namespace Database\Factories;

use App\Models\New_category;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewCategoryFactory extends Factory
{
    protected $model = New_category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(),
        ];
    }
}
