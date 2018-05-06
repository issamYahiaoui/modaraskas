<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmsSended extends Model
{
    protected $fillable = [
        'content',
        'phone',
        'user_id'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
