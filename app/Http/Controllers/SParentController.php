<?php

namespace App\Http\Controllers;

use App\PrincipalSettings;
use App\Student;
use Illuminate\Http\Request;
use App\Message ;
class SParentController extends Controller
{
    //
    public function __construct()
    {
        $newMessages = Message::where('read', 0)->get();
        \view()->share([
            'newMessages' => $newMessages
        ]);
        $this->middleware('auth')->except('activation');
    }

    public function  index (){

    }
    public function  addStudent($method){
        return view ('front.user-space.parent.'.$method.'addStudent',[
            'title' => __('lang.findTeacher')
        ]) ;
    }


    public function students () {
        $students =  Student::all();
      return view ('front.user-space.parent.students',[
          'title' => __('lang.students') ,
          'active'=> 'students',
          'list'=> $students
      ]);
    }
    public function  terms(){
        return view ('front.user-space.terms',[
            'title' => __('lang.termsConditions')  ,
            'active'=> 'termsConditions' ,
            'settings' => PrincipalSettings::first()
        ]);
    }
}
