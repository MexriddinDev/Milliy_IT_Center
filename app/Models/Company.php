<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'logo',
        'status',
        'industry',
        'website',
        'location',
    ];


    public function comments()
    {
        return $this->hasMany(Comment::class, 'company_id');
    }
}
