<?php

namespace App\Http\Controllers;


use App\ContractTemplate;
use App\PrincipalSettings;
use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
class SettingsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');

        $newMessages = Message::where('read', 0)->get();
        \view()->share([
            'newMessages' => $newMessages
        ]);
    }

    public function principalSettings(){
        return view('admin.settings.principal',[
            'settings'=> PrincipalSettings::first(),

            'active'=>'settings',
            'title'=>__('settings.settings'),
        ]);
    }

    public function savePrincipalSettings(Request $request , $id){
        $rules = [
            'logo' => 'mimes:jpeg,jpg,png' ,
            'office_en_name' => 'required',
            'office_ar_name' => 'required',
            'phone'  => 'required',
            'ar_address'=> 'required',
            'en_address' => 'required',
            'website_email'=> 'required',

        ] ;

        $this->validate($request ,$rules) ;

        $settings = PrincipalSettings::find($id);
        if ($request->hasFile('logo')) {
            $logo = 'landingpage/images/logo.png' ;
            Image::make($request->file('logo'))->save(public_path($logo));
        } else {
            $logo = $settings->logo;
        }



        PrincipalSettings::find($id)->update([
            'phone' => $request->get('phone'),
            'office_ar_name' => $request->get('office_ar_name'),
            'office_en_name' => $request->get('office_en_name'),
            'en_address' => $request->get('en_address'),
            'website_email' => $request->get('website_email'),
            'logo' => $logo ,
        ]) ;
        Session::Flash('success', __('dashboard.success'));

        return Redirect::back();

    }

    public function  staticTerms(){
        return view('admin.settings.terms',[
            'settings'=> PrincipalSettings::first(),

            'active'=>'settings',
            'title'=>__('settings.settings'),
        ]);
    }
    public function  staticPages(){
        return view('admin.settings.static',[
            'settings'=> PrincipalSettings::first(),

            'active'=>'settings',
            'title'=>__('settings.settings'),
        ]);
    }
    public function saveStaticPages(Request $request , $id){
        $rules = [
           'ar_about' => 'required' ,
           'en_about' => 'required' ,
            'ar_privacy_term' => 'required' ,
            'en_privacy_term' => 'required'
        ] ;

        PrincipalSettings::find($id)->update([
            'ar_about' => $request->get('ar_about') ,
            'en_about' => $request->get('en_about') ,
            'ar_privacy_term' => $request->get('ar_privacy_term'),
            'en_privacy_term' => $request->get('en_privacy_term'),
            'en_questions' => $request->get('en_questions'),
            'ar_questions' => $request->get('ar_questions'),
        ]) ;

        Session::Flash('success', __('dashboard.success'));

        return Redirect::back();

    }
    public function saveTerms(Request $request , $id){
        $rules = [
            'ar_teacher_terms' => 'required' ,
            'en_teacher_terms' => 'required' ,
            'ar_student_terms' => 'required' ,
            'en_student_terms' => 'required' ,
            'ar_parent_terms' => 'required' ,
            'en_parent_terms' => 'required' ,

        ] ;

        PrincipalSettings::find($id)->update([
            'ar_teacher_terms' => $request->get('ar_teacher_terms') ,
            'en_teacher_terms' => $request->get('en_teacher_terms') ,
            'ar_student_terms' => $request->get('ar_student_terms') ,
            'en_student_terms' => $request->get('en_student_terms') ,
            'ar_parent_terms' => $request->get('ar_parent_terms') ,
            'en_parent_terms' => $request->get('en_parent_terms') ,

        ]) ;

        Session::Flash('success', __('dashboard.success'));

        return Redirect::back();

    }

}
