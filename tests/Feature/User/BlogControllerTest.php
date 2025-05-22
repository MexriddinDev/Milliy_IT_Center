<?php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Blog_category;
use App\Models\Blog;

class BlogControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_blog_index_returns_all_blogs_with_category()
    {
        $category = Blog_category::factory()->create();
        $blog = Blog::factory()->create(['blog_category_id' => $category->id]);

        $response = $this->get('api/blog');

        $response->assertStatus(200)
            ->assertJsonFragment(['title' => $blog->title])
            ->assertJsonStructure([[
                'id',
                'title',
                'description',
                'image',
                'recorded_by',
                'category' => ['id', 'name']
            ]]);
    }

    public function test_blog_show_returns_specific_blog_with_category()
    {
        $category = Blog_category::factory()->create();
        $blog = Blog::factory()->create(['blog_category_id' => $category->id]);

        $response = $this->get('api/blog/' . $blog->id);

        $response->assertStatus(200)
            ->assertJsonFragment(['title' => $blog->title])
            ->assertJsonStructure([
                'id',
                'title',
                'description',
                'image',
                'recorded_by',
                'category' => ['id', 'name']
            ]);
    }
}
