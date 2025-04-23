<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class New_category extends Model
{
    protected $table = 'new_categories'; // Correct table name
    protected $fillable = [
        'name'
    ];

    public function nev()
    {
        return $this->hasMany(Nev::class, 'new_category_id');
    }
}
