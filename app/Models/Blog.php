<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = [
        'blog_category_id',
        'title',
        'description',
        'image',
        'recorded_by'
    ];

    public function category(){
        return $this->belongsTo(Blog_category::class, 'blog_category_id');
    }
}
