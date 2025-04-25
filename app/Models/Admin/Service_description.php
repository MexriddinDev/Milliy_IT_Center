<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Service_description extends Model
{
    protected $table = 'service_descriptions';
    protected $fillable = [
        'service_id',
        'title',
        'description',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
