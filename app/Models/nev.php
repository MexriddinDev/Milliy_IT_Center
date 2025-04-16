<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nev extends Model
{
    protected $table = 'nev';
    protected $fillable = [
        'new_category_id',
        'title',
        'description',
        'image',
    ];
}
