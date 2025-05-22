<?php

namespace Tests\Feature\User;

use Tests\TestCase;
use App\Models\Nev;
use App\Models\New_category;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NewsControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_nev_index()
    {
        $category = New_category::create(['name' => 'Iqtisodiyot']);
        Nev::create([
            'new_category_id' => $category->id,
            'title' => 'Bozor narxlari oshdi',
            'description' => 'So‘nggi kunlarda narxlar oshib bormoqda',
            'image' => 'market.jpg'
        ]);

        $response = $this->getJson('api/news');

        $response->assertStatus(200);
        $response->assertJsonFragment(['title' => 'Bozor narxlari oshdi']);
        $response->assertJsonFragment(['name' => 'Iqtisodiyot']);
    }

    public function test_nev_show()
    {
        $category = New_category::create(['name' => 'Madaniyat']);
        $nev = Nev::create([
            'new_category_id' => $category->id,
            'title' => 'Yangi teatr sahnalari',
            'description' => 'Teatr olamida yangiliklar',
            'image' => 'theatre.jpg'
        ]);

        $response = $this->getJson('api/news/' . $nev->id);

        $response->assertStatus(200);
        $response->assertJsonFragment(['title' => 'Yangi teatr sahnalari']);
        $response->assertJsonFragment(['name' => 'Madaniyat']);
    }
}
