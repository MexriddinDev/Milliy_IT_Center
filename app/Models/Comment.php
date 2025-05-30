<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
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
