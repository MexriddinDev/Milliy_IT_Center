<?php

namespace Tests\Feature\User;

use Tests\TestCase;
use App\Models\Blog_category;
use App\Models\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlogCategoryControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_returns_all_blog_categories_with_blogs()
    {
        $categories = Blog_category::factory()
            ->count(3)
            ->has(Blog::factory()->count(2), 'blogs') // blogs relationiga mos
            ->create();

        $response = $this->getJson('/blog-category');

        $response->assertStatus(200);
        $response->assertJsonCount(3); // 3 ta category qaytadi
        $response->assertJsonStructure([
            '*' => [
                'id',
                'name',
                'created_at',
                'updated_at',
                'blogs' => [ // relation nomi blogs bo'lishi kerak
                    '*' => [
                        'id',
                        'blog_category_id',
                        'title',
                        'description',
                        'image',
                        'recorded_by',
                        'created_at',
                        'updated_at',
                    ]
                ],
            ],
        ]);
    }

    /** @test */
    public function it_returns_single_blog_category_with_blogs()
    {
        $category = Blog_category::factory()
            ->has(Blog::factory()->count(2), 'blogs')
            ->create();

        $response = $this->getJson("/blog-category/{$category->id}");

        $response->assertStatus(200);
        $response->assertJson([
            'id' => $category->id,
            'name' => $category->name,
        ]);

        $response->assertJsonStructure([
            'id',
            'name',
            'created_at',
            'updated_at',
            'blogs' => [
                '*' => [
                    'id',
                    'blog_category_id',
                    'title',
                    'description',
                    'image',
                    'recorded_by',
                    'created_at',
                    'updated_at',
                ]
            ],
        ]);
    }

    /** @test */
    public function it_returns_404_if_blog_category_not_found()
    {
        $response = $this->getJson('/blog-category/999999'); // mavjud bo'lmagan id

        $response->assertStatus(404);
    }
}
