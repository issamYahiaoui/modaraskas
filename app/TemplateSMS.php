<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateSMS extends Model
{
    protected $fillable=[
        'subject',
        'message'
    ];
}
