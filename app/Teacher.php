<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{


    //
    public function user(){
        return $this->belongsTo('App\User') ;
    }
    public function teachingChoices() {
        return $this->hasMany('App\TeachingChoice') ;
    }

    public function getTeachingChoices (){
            $result =  $this->teachingChoices()->orderByDesc('created_at')->first();
            return $result ? $result : new TeachingChoice();
    }
}
