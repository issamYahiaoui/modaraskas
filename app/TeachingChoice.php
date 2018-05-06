<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachingChoice extends Model
{
    //
    //
    protected  $fillable = [
        'teacher_id' , 'subject_id', 'teaching_type_id' , 'teaching_option_id', 'testPeriod' ,
        'school_stage_id' , 'high_school_stage_id' , 'curricula_id' , 'specialization_id'
    ] ;









    /** relationships  */
    public function teacher(){
        return $this->belongsTo('App\Teacher') ;
    }

    public function schoolStages(){
        return $this->belongsToMany('App\SchoolStage');
    }
    public function highSchoolStages(){
        return $this->belongsToMany('App\HighSchoolStage');
    }
    public function specializations(){
        return $this->belongsToMany('App\Specialization');
    }
    public function curriculas(){
        return $this->belongsToMany('App\Curricula');

    }
    public function subjects(){
        return $this->belongsToMany('App\Subject');
    }
    public function teachingTypes(){
        return $this->belongsToMany('App\TeachingType');
    }
    public function teachingOptions(){
        return $this->belongsToMany('App\TeachingOption');
    }
}
