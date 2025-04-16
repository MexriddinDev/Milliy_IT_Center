<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog_question extends Model
{
    protected $table = 'blog_questions';
    protected $fillable = [
        'blog_id',
        'text'
    ];
}
