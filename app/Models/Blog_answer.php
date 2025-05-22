<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_answer extends Model
{
    use HasFactory;

    protected $table = 'blog_answers';
    protected $fillable = [
        'blog_question_id',
        'text'
    ];

    public function question(){
        return $this->belongsTo(Blog_question::class, 'blog_question_id');
    }
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
