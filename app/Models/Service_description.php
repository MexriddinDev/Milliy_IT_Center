<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service_description extends Model
{
    protected $table = 'service_description';
    protected $fillable = [
        'service_id',
        'title',
        'description',
    ];
}
