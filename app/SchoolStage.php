<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolStage extends Model
{
    //
    public function schoolStageChoises(){
        $this->hasMany('SchoolStageChoice') ;
    }
}
