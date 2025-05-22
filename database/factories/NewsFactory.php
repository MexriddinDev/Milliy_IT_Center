<?php

namespace Database\Factories;

use App\Models\Nev;
use App\Models\New_category;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    protected $model = Nev::class;

    public function definition()
    {
        return [
            'new_category_id' => New_category::factory(), // Yangi kategoriya yaratiladi
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(640, 480, 'news', true), // 640x480 o'lchamdagi yangilik rasmi URL
        ];
    }
}
