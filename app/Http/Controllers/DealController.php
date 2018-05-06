<?php

namespace App\Http\Controllers;

use App\Deal;
use Illuminate\Http\Request;
use App\Message;
class DealController extends Controller
{
    //
    public function __construct()
    {
        $newMessages = Message::where('read', 0)->get();
        \view()->share([
            'newMessages' => $newMessages
        ]);
        $this->middleware('auth') ;
    }

    public function index(Request $request ,$user )
    {
        return view('front.user-space.'.$user.'.previousTeaching',[
            'title' => __('lang.previousTeaching') ,
            'active' => 'previousTeaching' ,
            'list' => Deal::all()
        ]) ;
    }
}
