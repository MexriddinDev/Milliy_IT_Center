<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nev extends Model
{
    protected $table = 'nevs'; // Correct table name
    protected $fillable = [
        'new_category_id',
        'title',
        'description',
        'image',
    ];

    public function new_category()
    {
        return $this->belongsTo(New_category::class, 'new_category_id');
    }
}
