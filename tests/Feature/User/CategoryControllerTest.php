<?php


// tests/Feature/CategoryApiTest.php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Category;
use App\Models\Service;

class CategoryControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_category_index()
    {
        $category = Category::factory()->create(['name' => 'Web']);
        Service::factory()->create([
            'category_id' => $category->id,
            'name' => 'Laravel',
        ]);

        $this->getJson('/api/categories')
            ->assertOk()
            ->assertJsonFragment(['name' => 'Web'])
            ->assertJsonFragment(['name' => 'Laravel']);
    }

    public function test_category_show()
    {
        $category = Category::factory()->create(['name' => 'Mobile']);

        $this->getJson('/api/categories/' . $category->id)
            ->assertOk()
            ->assertJsonFragment(['name' => 'Mobile']);
    }
}
