<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    //

    public function schoolStageChoises(){
        $this->hasMany('SchoolStageChoice') ;
    }
}
