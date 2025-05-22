<?php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Blog;
use App\Models\Blog_question;

class BlogQuestionControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_blog_question_index_endpoint()
    {
        $blog = Blog::factory()->create();
        $question = Blog_question::factory()->create([
            'blog_id' => $blog->id,
            'text' => 'Bu savol matni',
        ]);

        $response = $this->get('api/blog-question');

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'id' => $question->id,
            'text' => 'Bu savol matni',
        ]);
    }

    public function test_blog_question_show_endpoint()
    {
        $blog = Blog::factory()->create();
        $question = Blog_question::factory()->create([
            'blog_id' => $blog->id,
            'text' => 'Yagona savol',
        ]);

        $response = $this->get('api/blog-question/' . $question->id);

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'id' => $question->id,
            'text' => 'Yagona savol',
        ]);
    }
}
