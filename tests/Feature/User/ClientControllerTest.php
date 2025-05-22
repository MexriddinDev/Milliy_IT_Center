<?php

namespace Tests\Feature\User;

use Tests\TestCase;
use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClientControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_client_index()
    {
        $client = Client::factory()->create([
            'name' => 'Ali',
            'phone' => '998901234567',
            'company_name' => 'Tech Solutions',
            'type_service' => 'IT support',
            'message' => 'Help needed ASAP',
        ]);

        $response = $this->getJson('/api/clients');

        $response->assertStatus(200);

        $response->assertJsonFragment([
            'name' => 'Ali',
            'phone' => '998901234567',
            'company_name' => 'Tech Solutions',
            'type_service' => 'IT support',
            'message' => 'Help needed ASAP',
        ]);
    }

    public function test_client_show()
    {
        $client = Client::factory()->create([
            'name' => 'Bobur',
            'phone' => '998909876543',
            'company_name' => 'Business Corp',
            'type_service' => 'Consulting',
            'message' => 'Looking for advice',
        ]);

        $response = $this->getJson('/api/clients/' . $client->id);

        $response->assertStatus(200);

        $response->assertJsonFragment([
            'name' => 'Bobur',
            'phone' => '998909876543',
            'company_name' => 'Business Corp',
            'type_service' => 'Consulting',
            'message' => 'Looking for advice',
        ]);
    }

    public function test_client_store()
    {
        $data = [
            'name' => 'Jasur',
            'phone' => '998912345678',
            'company_name' => 'Creative LLC',
            'type_service' => 'Design',
            'message' => 'Need logo design',
        ];

        $response = $this->postJson('/api/clients', $data);

        $response->assertStatus(201);

        $this->assertDatabaseHas('clients', [
            'name' => 'Jasur',
            'phone' => '998912345678',
            'company_name' => 'Creative LLC',
            'type_service' => 'Design',
            'message' => 'Need logo design',
        ]);

        $response->assertJsonFragment($data);
    }
}
