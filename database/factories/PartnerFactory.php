<?php

namespace Database\Factories;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerFactory extends Factory
{
    protected $model = Partner::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'image' => $this->faker->imageUrl(410, 512),
            'title' => $this->faker->catchPhrase(),
            'description' => $this->faker->paragraph(),
            'why_this_partner' => $this->faker->sentence(),
            'main_chances' => $this->faker->sentence(),
            'our_cooperation' => $this->faker->sentence(),
        ];
    }
}
