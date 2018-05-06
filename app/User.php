<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use phpDocumentor\Reflection\Types\Parent_;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'role', 'activationCode', 'address', 'phone', 'active'
        , 'firstName' , 'age' , 'gender', 'lastName' ,'lat' ,'lng' ,'country' ,'city'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    // methods

    public function storeAccordingToType($type){

        switch ($type){
            case  'student'  : $this->student()->save(new Student());
                break ;
            case  'teacher'  : $this->teacher()->save(new Teacher());
                break ;
            case  'parent'   : $this->sParent()->save(new sParent());
                break ;
        }
    }

        public  function isStudent(){
            return $this->type === 'student';
        }
        public  function isParent(){
            return $this->type === 'parent';
        }
        public  function isTeacher(){
            return $this->type === 'teacher';
        }
    public  function isAdmin(){
        return $this->type === 'admin';
    }


    /**   relationships    **/

    public function schoolStageChoises(){
        $this->hasMany('SchoolStageChoice') ;
    }
    public function student (){
        return $this->hasOne('App\Student');
    }
    public function teacher (){
        return $this->hasOne('App\Teacher');
    }
    public function sParent (){
        return $this->hasOne('App\sParent');
    }

}
