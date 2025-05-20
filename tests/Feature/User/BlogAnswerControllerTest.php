<?php
//
//namespace Tests\Feature\User;
//
//use App\Models\Blog_answer;
//use App\Models\User;
//use Illuminate\Foundation\Testing\RefreshDatabase;
//use Tests\TestCase;
//
//class BlogAnswerControllerTest extends TestCase
//{
//    protected $user;
//
//    protected function setUp(): void
//    {
//        parent::setUp();
//
//    }
//
//    public function test_index()
//    {
//        $response = $this->actingAs($this->user)->getJson('/blog-answer');
//        $response->assertStatus(200);
//        $response->assertJsonCount(Blog_answer::count());
//    }
//
//    public function test_show()
//    {
//        $blogAnswer = Blog_answer::first();
//        if (!$blogAnswer) {
//            $this->fail('Blog_answer ma\'lumotlari bazada mavjud emas. Iltimos, ma\'lumot qo\'shing.');
//        }
//
//        $response = $this->actingAs($this->user)->getJson("/blog-answer/{$blogAnswer->id}");
//        $response->assertStatus(200)->assertJsonFragment(['id' => $blogAnswer->id]);
//    }
//}
