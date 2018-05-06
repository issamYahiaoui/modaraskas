<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachingType extends Model
{
    //
    public function schoolStageChoises(){
        $this->hasMany('SchoolStageChoice') ;
    }
}
