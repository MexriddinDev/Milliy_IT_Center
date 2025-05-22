<?php

// tests/Feature/ServiceApiTest.php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Service;
use App\Models\Category;

class ServiceControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_service_index()
    {
        $category = Category::factory()->create(['name' => 'DevOps']);
        Service::factory()->create([
            'category_id' => $category->id,
            'name' => 'Docker'
        ]);

        $this->getJson('/api/services')
            ->assertOk()
            ->assertJsonFragment(['name' => 'DevOps'])
            ->assertJsonFragment(['name' => 'Docker']);
    }

    public function test_service_show()
    {
        $service = Service::factory()->create(['name' => 'Vue.js']);

        $this->getJson('/api/services/' . $service->id)
            ->assertOk()
            ->assertJsonFragment(['name' => 'Vue.js']);
    }
}
