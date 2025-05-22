<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_question extends Model
{
    use HasFactory;

    protected $table = 'blog_questions';
    protected $fillable = [
        'blog_id',
        'text'
    ];

    public function answers(){
        return $this->hasMany(Blog_answer::class, 'blog_question_id');
    }

    // App\Models\Blog_question.php
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }







}
