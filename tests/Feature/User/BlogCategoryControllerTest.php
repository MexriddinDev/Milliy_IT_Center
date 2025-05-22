<?php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Blog_category;
use App\Models\Blog;

class BlogCategoryControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_blog_category_index_returns_all_categories_with_blogs()
    {
        $category = Blog_category::factory()->create();
        $blog = Blog::factory()->create(['blog_category_id' => $category->id]);

        $response = $this->get('api/blog-category');

        $response->assertStatus(200)
            ->assertJsonFragment(['name' => $category->name])
            ->assertJsonStructure([[
                'id',
                'name',
                'blogs' => [
                    ['id', 'title', 'description', 'image', 'recorded_by']
                ]
            ]]);
    }

    public function test_blog_category_show_returns_category_with_blogs()
    {
        $category = Blog_category::factory()->create();
        $blog = Blog::factory()->create(['blog_category_id' => $category->id]);

        $response = $this->get('api/blog-category/' . $category->id);

        $response->assertStatus(200)
            ->assertJsonFragment(['name' => $category->name])
            ->assertJsonStructure([
                'id',
                'name',
                'blogs' => [
                    ['id', 'title', 'description', 'image', 'recorded_by']
                ]
            ]);
    }
}
