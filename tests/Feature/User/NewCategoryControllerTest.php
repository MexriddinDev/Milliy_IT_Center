<?php

namespace Tests\Feature\User;

use Tests\TestCase;
use App\Models\New_category;
use App\Models\Nev;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NewCategoryControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_new_category_index()
    {
        // Ma'lumot yaratamiz
        $category = New_category::create(['name' => 'Texnologiya']);
        Nev::create([
            'new_category_id' => $category->id,
            'title' => 'Yangi smartfon chiqdi',
            'description' => 'Bu smartfon juda zo\'r',
            'image' => 'image.jpg'
        ]);

        $response = $this->getJson('api/news-categories');

        // Javobni tekshiramiz
        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Texnologiya']);
        $response->assertJsonFragment(['title' => 'Yangi smartfon chiqdi']);
    }

    public function test_new_category_show()
    {
        $category = New_category::create(['name' => 'Sport']);
        Nev::create([
            'new_category_id' => $category->id,
            'title' => 'Yangi futbolchi shartnoma imzoladi',
            'description' => 'Jamoaga kuchli futbolchi qo\'shildi',
            'image' => 'football.jpg'
        ]);

        $response = $this->getJson('api/news-categories/' . $category->id);

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Sport']);
        $response->assertJsonFragment(['title' => 'Yangi futbolchi shartnoma imzoladi']);
    }
}
