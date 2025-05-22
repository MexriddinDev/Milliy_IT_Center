<?php

// database/factories/CompanyFactory.php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    protected $model = \App\Models\Company::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->text(200),
            'image' => $this->faker->imageUrl(640, 480, 'business'),
            'logo' => $this->faker->imageUrl(100, 100, 'business'),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'industry' => $this->faker->word(),
            'website' => $this->faker->url,
            'location' => $this->faker->city,
        ];
    }
}



