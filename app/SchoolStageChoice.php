<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolStageChoice extends Model
{
    //
    protected  $fillable = [
        'student_id' , 'school_stage_id', 'high_school_stage_id' , 'specialization_id', 'teaching_type_id' ,'school'
    ] ;









    /** relationships  */
    public function student(){
        return $this->belongsTo('App\Student') ;
    }

    public function schoolStage(){
        return $this->belongsTo('App\SchoolStage') ;
    }

    public function highSchoolStage(){
        return $this->belongsTo('App\HighSchoolStage')  ;
    }

    public function teachingType(){
        return $this->belongsTo('App\TeachingType') ;
    }

    public function specialization(){
        return $this->belongsTo('App\Specialization') ;
    }
}
