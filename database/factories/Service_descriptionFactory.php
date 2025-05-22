<?php

namespace Database\Factories;

use App\Models\Service_description;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class Service_descriptionFactory extends Factory
{
    protected $model = Service_description::class;

    public function definition(): array
    {
        return [
            'service_id' => Service::factory(),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph
        ];
    }
}

