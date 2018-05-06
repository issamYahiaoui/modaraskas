<?php

namespace App\Http\Controllers;

use App\Carousel;
use App\Teacher;
use Illuminate\Http\Request;
use App\Message;
class InterfaceController extends Controller
{
    public function __construct()
    {
        $newMessages = Message::where('read', 0)->get();
        \view()->share([
            'newMessages' => $newMessages
        ]);
    }
    public function index()
    {
        $teachers = Teacher::join('users','teachers.user_id','=','users.id')->get()->take(4);

        return view('front.home.landing',[
            'carousels' => Carousel::all() ,
            'title' => 'home',
            'teachers' => $teachers,
        ]);
    }

    public function contact()
    {
        return view('front.home.contact',[
            'title'=> 'contact'
        ]);
    }
    public function about()
    {
        return view('front.home.about',[
            'title'=> 'about'
        ]);
    }
    public function faq()
    {
        return view('front.home.faq',[
            'title'=> 'faq'
        ]);
    }
    public function terms()
    {
        return view('front.home.terms',[
            'title'=> 'terms'
        ]);
    }
    public function loginForm(){
        return view ('front_auth.login') ;
    }

    public function registerForm(){
        return view ('front_auth.register') ;
    }

}
