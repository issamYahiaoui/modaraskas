<?php

namespace App\Http\Controllers;

use Illuminate\Filesystem\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Message;
class LanguageController extends Controller
{
    public function __construct()
    {
        $newMessages = Message::where('read', 0)->get();
        \view()->share([
            'newMessages' => $newMessages
        ]);

    }
    public function changeLanguage(Request $request)
    {

        Session::put('locale',$request->get('locale'));
        app()->setLocale($request->get('locale'));
        if ($request->ajax()){
            return response()->json(['locate'=>Session::get('locale')]);
        }
        return redirect()->back() ;
    }


}
