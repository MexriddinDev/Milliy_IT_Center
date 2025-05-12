<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blog_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_question_id')
                ->constrained('blog_questions')
                ->onDelete('cascade');
            $table->text('text')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blog_answers');
    }
};
