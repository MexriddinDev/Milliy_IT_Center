<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'company_id',
        'stars',
        'comment',
    ];

    public function company(){
        return $this->belongsTo(Company::class, 'company_id');
    }
}
