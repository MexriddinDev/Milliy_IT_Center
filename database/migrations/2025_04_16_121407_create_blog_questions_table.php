<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blog_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')
                ->constrained('blogs')
                ->onDelete('cascade');
            $table->text('text');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blog_questions');
    }
};
