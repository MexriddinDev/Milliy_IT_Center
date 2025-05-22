<?php
// tests/Feature/ServiceDescriptionApiTest.php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Service;
use App\Models\Service_description;

class ServiceDescriptionControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_service_description_index()
    {
        $service = Service::factory()->create(['name' => 'React']);
        Service_description::factory()->create([
            'service_id' => $service->id,
            'title' => 'Componentlar',
            'description' => 'Reactda componentlar yordamida UI quriladi.'
        ]);

        $this->getJson('/api/service-description')
            ->assertOk()
            ->assertJsonFragment(['title' => 'Componentlar']);
    }

    public function test_service_description_show()
    {
        $description = Service_description::factory()->create([
            'title' => 'REST API',
            'description' => 'Tarmoq orqali ma’lumot almashish protokoli.'
        ]);

        $this->getJson('/api/service-description/' . $description->id)
            ->assertOk()
            ->assertJsonFragment(['title' => 'REST API']);
    }
}
