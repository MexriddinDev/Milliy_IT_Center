<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_categories';
    protected $fillable = [
        'name',
    ];

    public function blog()
    {
        return $this->hasMany(Blog::class, 'blog_category_id');

    }
























}

