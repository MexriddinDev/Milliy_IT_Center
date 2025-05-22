<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service_description extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
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
