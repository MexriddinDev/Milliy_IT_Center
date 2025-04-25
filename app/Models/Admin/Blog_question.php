<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Blog_question extends Model
{
    protected $table = 'blog_questions';
    protected $fillable = [
        'blog_id',
        'text'
    ];

    public function answers(){
        return $this->hasMany(Blog_answer::class, 'blog_question_id');
    }






}
