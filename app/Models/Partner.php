<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
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
