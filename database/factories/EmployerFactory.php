<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployerFactory extends Factory
{
    protected $model = Employer::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(20, 80),
            'image' => $this->faker->imageUrl(300, 300),
            'occupation' => $this->faker->jobTitle(),
            'experience' => $this->faker->numberBetween(1, 40),
            'linkedin' => $this->faker->url(),
            'twitter' => $this->faker->url(),
            'facebook' => $this->faker->url(),
        ];
    }
}
