<?php

namespace App\Http\Controllers;

use App\Crud;
use App\Curricula;
use App\HighSchoolStage;
use App\PrincipalSettings;
use App\SchoolStage;
use App\Specialization;
use App\Subject;
use App\TeachingChoice;
use App\TeachingOption;
use App\TeachingType;
use App\User;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use App\Teacher ;
use App\Message;
use Illuminate\Support\Facades\App;

class TeacherController extends Controller
{
    public function __construct()
    {
        $newMessages = Message::where('read', 0)->get();
        \view()->share([
            'newMessages' => $newMessages
        ]);
        $this->middleware('auth') ;
    }

    public function index(Request $request )
    {
        $teachers =  Teacher::join('users','teachers.user_id','=','users.id')->get();
        if ($request->ajax()){
            return $teachers;
        }
        return view('admin.user.teachers.allUser', [
            'list' => $teachers ,
            'title' => __('lang.teachers') ,
            'active' => "teachers",
            'model'=> null
        ]);
    }


    public function profile($id){
        $teacher = Teacher::join('users','teachers.user_id','=','users.id')->find($id);

        return view ('front.user-space.teacher.profile',[
            'title' => __('lang.profile') ,
            'teacher' => $teacher
        ]);
    }



    public function show($id)
    {
        return Teacher::findOrFail($id)->join('users','teachers.user_id','=','users.id')->get();
    }

    public function update(Request $request, $id)
    {
        $Teacher = Teacher::findOrFail($id);
        $Teacher->update($request->all());

        return $Teacher;
    }

    public function store(Request $request)
    {
        $Teacher = Teacher::create($request->all());
        return $Teacher;
    }

    public function destroy($id)
    {
        $Teacher = Teacher::findOrFail($id);
        $Teacher->delete();
        return '';
    }




    /******/

    public function previousTeaching(){
        return view('front.user-space.teacher.previousTeaching',[
            'title' => __('lang.previousTeaching') ,
            'active' => 'previousTeaching' ,
            'list' => []
        ]) ;
    }
    public function financialDetails(){
        return view ('front.user-space.teacher.financialDetails',[
            'title' => __('lang.financialDetails') ,
            'active' => 'financialDetails' ,
            'list' => []
        ]);
    }
    public function  terms(){
        return view ('front.user-space.terms',[
            'title' => __('lang.termsConditions')  ,
            'active'=> 'termsConditions' ,
            'settings' => PrincipalSettings::first()
        ]);
    }

    public function getTeachingInfo(){
        return response()->json([
            'schoolStages' => SchoolStage::all() ,
            'highSchoolStages' => HighSchoolStage::all(),
            'specializations' => Specialization::all() ,
            'curriculums' => Curricula::all() ,
            'subjects' => Subject::all(),
            'options' => TeachingOption::all() ,
            'types' => TeachingType::all() ,
            'testPeriod' => 5
        ]) ;
    }
    public function getSelectedTeachingInfo($id){
        $teacher =  auth()->user()->teacher;
        return $teachingChoices = $teacher->getTeachingChoices();

        return response()->json([
            'schoolStages' => $teachingChoices->schoolStages ,
            'highSchoolStages' =>$teachingChoices->highSchoolStages ,
            'specializations' =>$teachingChoices->specializations ,
            'curriculums' => $teachingChoices->curriculas ,
            'types' => $teachingChoices->teachingTypes ,
            'options' => $teachingChoices->teachingOptions ,
            'subjects' => $teachingChoices->subjects
        ]) ;
    }

    public function postSelectedTeachingInfo(Request $request, $id){
        $teacher  =  auth()->user()->teacher   ;
        $teachingChocie = new TeachingChoice() ;
        $schoolStages = $request->get('schoolStages') ;

        $highSchoolStages = $request->get('highSchoolStages') ;
        $specializations = $request->get('specializations') ;
        $curriculams = $request->get('curriculams') ;
        $teachingTypes = $request->get('teachingTypes') ;
        $teachingOptions = $request->get('teachingOptions') ;
        $subjects = $request->get('subjects') ;
        $testPeriod = $request->get('testPeriod') ;



        if($schoolStages){
            foreach ($schoolStages as $item){

                $teachingChocie->schoolStages()->attach( Crud::jsonToModel($item,new SchoolStage())) ;
            }
        }

        if($highSchoolStages){
            foreach ($highSchoolStages as $item){
                $teachingChocie->highSchoolStages()->attach( Crud::jsonToModel($item,new HighSchoolStage())) ;
            }
        }
        if($specializations){
            foreach ($specializations as $item){
                $teachingChocie->specializations()->attach( Crud::jsonToModel($item,new Specialization())) ;
            }
        }
        if($curriculams){
            foreach ($curriculams as $item){
                $teachingChocie->curriculas()->attach( Crud::jsonToModel($item,new Curricula())) ;
            }
        }
        if($teachingTypes){
            foreach ($teachingTypes as $item){
                $teachingChocie->teachingTypes()->attach( Crud::jsonToModel($item,new TeachingType())) ;
            }
        }
        if($teachingOptions){
            foreach ($teachingOptions as $item){
                $teachingChocie->teachingOptions()->attach( Crud::jsonToModel($item,new TeachingOption())) ;
            }
        }
        if($subjects){
            foreach ($subjects as $item){
                $teachingChocie->subjects()->attach( Crud::jsonToModel($item,new Subject())) ;
            }
        }
        $teachingChocie->teacher_id = $teacher->id ;
        $teachingChocie->testPeriod = $testPeriod;
        $teachingChocie->save();

        return $teacher ;

    }

}
