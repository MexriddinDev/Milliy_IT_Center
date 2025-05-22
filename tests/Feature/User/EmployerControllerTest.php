<?php

namespace Tests\Feature\User;

use Tests\TestCase;
use App\Models\Employer;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmployerControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_employer_index()
    {
        // 3 ta employer yaratamiz
        Employer::factory()->count(3)->create();

        $response = $this->getJson('/api/employers');

        $response->assertStatus(200);

        $response->assertJsonCount(3);
    }

    public function test_employer_show()
    {
        $employer = Employer::factory()->create();

        $response = $this->getJson("/api/employers/{$employer->id}");

        $response->assertStatus(200);

        $response->assertJson([
            'id' => $employer->id,
            'name' => $employer->name,
            'age' => $employer->age,
            'image' => $employer->image,
            'occupation' => $employer->occupation,
            'experience' => $employer->experience,
            'linkedin' => $employer->linkedin,
            'twitter' => $employer->twitter,
            'facebook' => $employer->facebook,
        ]);
    }

    public function test_employer_show_not_found()
    {
        $response = $this->getJson('/api/employers/999999');

        $response->assertStatus(404);
    }
}
