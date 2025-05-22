<?php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Blog;
use App\Models\Blog_question;
use App\Models\Blog_answer;

class BlogAnswerControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_blog_answer_index_endpoint()
    {
        $blog = Blog::factory()->create();
        $question = Blog_question::factory()->create(['blog_id' => $blog->id]);
        $answer = Blog_answer::factory()->create([
            'blog_question_id' => $question->id,
            'text' => 'Bu javob matni',
        ]);

        $response = $this->get('api/blog-answer');

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'id' => $answer->id,
            'text' => 'Bu javob matni',
        ]);
    }

    public function test_blog_answer_show_endpoint()
    {
        $blog = Blog::factory()->create();
        $question = Blog_question::factory()->create(['blog_id' => $blog->id]);
        $answer = Blog_answer::factory()->create([
            'blog_question_id' => $question->id,
            'text' => 'Yagona javob',
        ]);

        $response = $this->get('api/blog-answer/' . $answer->id);

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'id' => $answer->id,
            'text' => 'Yagona javob',
        ]);
    }
}
