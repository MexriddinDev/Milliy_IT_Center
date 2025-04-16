<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog_answer extends Model
{
    protected $table = 'blog_answers';
    protected $fillable = [
        'blog_question_id',
        'text'
    ];
}
