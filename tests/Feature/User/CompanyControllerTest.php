<?php

namespace Tests\Feature\User;

use Tests\TestCase;
use App\Models\Company;
use App\Models\Comment;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CompanyControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_company_index()
    {
        $company = Company::factory()->create(['name' => 'Milliy IT Center']);

        Comment::factory()->create([
            'company_id' => $company->id,
            'stars' => 5,
            'comment' => 'Ajoyib kompaniya!'
        ]);

        $response = $this->getJson('api/companies');

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Milliy IT Center']);
        $response->assertJsonFragment(['comment' => 'Ajoyib kompaniya!']);
    }

    public function test_company_show()
    {
        $company = Company::factory()->create(['name' => 'Tech Corp']);
        Comment::factory()->create([
            'company_id' => $company->id,
            'stars' => 4,
            'comment' => 'Good service'
        ]);

        $response = $this->getJson('api/companies/' . $company->id);

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Tech Corp']);

    }
}
