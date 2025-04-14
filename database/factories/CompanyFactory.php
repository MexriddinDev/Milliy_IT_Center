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
            'logo' => $this->faker->imageUrl(),
            'address' => $this->faker->address(),
            'website' => $this->faker->url(),
            'status' => $this->faker->randomElement([
                'active', 'inactive'
            ]),
            'industry' => $this->faker->randomElement([
                'banking', 'business', 'industrial', 'learning center'
            ]),
            'comment_to_mic' => $this->faker->text(),
        ];
    }
}
