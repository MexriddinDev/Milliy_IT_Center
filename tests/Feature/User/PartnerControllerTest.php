<?php

namespace Tests\Feature\User;

use Tests\TestCase;
use App\Models\Partner;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PartnerControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_partner_index()
    {
        Partner::factory()->count(3)->create();

        $response = $this->getJson('/api/partners');

        $response->assertStatus(200);
        $response->assertJsonCount(3);
    }

    public function test_partner_show()
    {
        $partner = Partner::factory()->create();

        $response = $this->getJson("/api/partners/{$partner->id}");

        $response->assertStatus(200);

        $response->assertJson([
            'id' => $partner->id,
            'name' => $partner->name,
            'image' => $partner->image,
            'title' => $partner->title,
            'description' => $partner->description,
            'why_this_partner' => $partner->why_this_partner,
            'main_chances' => $partner->main_chances,
            'our_cooperation' => $partner->our_cooperation,
        ]);
    }

    public function test_partner_show_not_found()
    {
        $response = $this->getJson('/api/partners/999999');

        $response->assertStatus(404);
    }
}
