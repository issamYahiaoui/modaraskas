<?php

namespace App\Http\Controllers;

use App\Message;
use App\PrincipalSettings;
use App\SchoolStageChoice;
use App\Student;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
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

    public function calender(){
        return view('front.user-space.student.calender',
            [
                'title' => __('lang.schoolCalender') ,
                'active' => 'schoolCalender',

            ]) ;
    }

    public function previousTeaching(){
        return view('front.user-space.student.previousTeaching',[
            'title' => __('lang.previousTeaching') ,
            'active' => 'previousTeaching' ,
            'list' => []
        ]) ;
    }
    public function  searchTeacher($method){
        return view ('front.user-space.student.'.$method.'SearchStepper',[
            'title' => __('lang.findTeacher')
        ]) ;
    }



    public function  terms(){
        return view ('front.user-space.terms',[
            'title' => __('lang.termsConditions')  ,
            'active'=> 'termsConditions' ,
            'settings' => PrincipalSettings::first()
        ]);
    }


    public function  postSchoolInfo(Request $request  ,  $id ) {

      $student = User::find($id)->student ;
        $schoolStage = $request->get('stage') ;
        $highSchoolStage = $request->get('highSchoolStage') ;
        $specialization = $request->get('specialization') ;
        $teachingTypes = $request->get('teachingType') ;
        $school = $request->get('school');

        $schoolstageChoice = SchoolStageChoice::create([
            'school_stage_id' => $schoolStage,
            'high_school_stage_id' => $highSchoolStage,
            'specialization_id' => $specialization ,
            'teaching_type_id' => $teachingTypes ,
            'student_id' => $student->id ,
            'school'=> $school
        ]);
        Session::Flash('success', __('dashboard.success'));
        return Redirect::back();


    }

}
