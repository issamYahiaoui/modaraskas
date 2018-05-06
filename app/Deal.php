<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    //
    protected $fillable= ['teacher_id', 'student_id','begin_date',  'end_date', 'price' , 'paymentMethod', 'state'] ;
}
