<?php

namespace Tests\Feature\User;

use Tests\TestCase;
use App\Models\Comment;
use App\Models\Company;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_comment_index()
    {
        $company = Company::factory()->create();
        $comment = Comment::factory()->create([
            'company_id' => $company->id,
            'stars' => 3,
            'comment' => 'Average experience'
        ]);

        $response = $this->getJson('api/comment'); // routes da comment singular, shuning uchun shunday yoziladi

        $response->assertStatus(200);
        $response->assertJsonFragment(['comment' => 'Average experience']);
        $response->assertJsonFragment(['stars' => 3]);
    }

    public function test_comment_show()
    {
        $company = Company::factory()->create();
        $comment = Comment::factory()->create([
            'company_id' => $company->id,
            'stars' => 5,
            'comment' => 'Excellent!'
        ]);

        $response = $this->getJson('api/comments/' . $comment->id);

        $response->assertStatus(200);
        $response->assertJsonFragment(['comment' => 'Excellent!']);
        $response->assertJsonFragment(['stars' => 5]);
    }
}
