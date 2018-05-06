<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HighSchoolStage extends Model
{
    //
    public function schoolStageChoises(){
        $this->hasMany('SchoolStageChoice') ;
    }
}
