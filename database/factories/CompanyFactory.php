<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'description' => $this->faker->text(),
            'image' => $this->faker->imageUrl(),
            'logo' => $this->faker->imageUrl(),
            'status' => $this->faker->sentence('7'),
            'industry' => $this->faker->sentence('4'),
            'website' => $this->faker->url(),
            'location' => $this->faker->address(),
        ];
    }
}
