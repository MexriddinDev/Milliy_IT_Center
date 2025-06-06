<?php

namespace App\Models\Admin;


use Illuminate\Database\Eloquent\Model;

class Blog_answer extends Model
{
    protected $table = 'blog_answers';
    protected $fillable = [
        'blog_question_id',
        'text'
    ];

    public function question(){
        return $this->belongsTo(Blog_question::class, 'blog_question_id');
    }
}
