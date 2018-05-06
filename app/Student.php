<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected  $fillable = ['student_id'] ;

    public function user(){
        return $this->belongsTo('App\User') ;
    }
    public function schoolStageChoices(){
        return $this->hasMany('App\SchoolStageChoice') ;
    }
    public function getSchoolStageChoice(){
        $result =  $this->schoolStageChoices()->orderByDesc('created_at')->first();
        return $result ? $result : new SchoolStageChoice();
    }
}
