<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $table = 'employers';
    protected $fillable = [
        'name',
        'age',
        'image',
        'occupation',
        'experience',
        'linkedin',
        'twitter',
        'facebook',
    ];
}
