<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'partners';
    protected $fillable = [
        'name',
        'image',
        'title',
        'description',
        'why_this_partner',
        'main_chances',
        'our_cooperation',
    ];
}
