<?php

namespace App\Http\Controllers;

use App\Carousel;
use App\Message;
use App\Notifications\MessageNewNotification;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
            $newMessages = Message::where('read', 0)->get();
            \view()->share([
                'newMessages' => $newMessages
            ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            return view('admin.index.index')->with([
                'messages' => Message::all()->sortByDesc('created_at')->take(5),
                'users' => User::all()->sortByDesc('created_at')->take(5),
                'active' => 'index',
                'title' => __('landing.index'),
            ]);

    }





    public function customerProfile()
    {
        return view('front.user-space.profile.');
    }






    public function landingCarousel()
    {
        return view('admin.page.landingCarousel')->with([
            'carousel' => Carousel::all(),
            'active' => '',
            'title' => __('settings.landingCarousel'),
        ]);
    }

    public function createCarousel(Request $request)
    {
        $img = auth()->user()->id . '_' . time() . str_random(5) . '.png';
        Image::make($request->file('img'))->save(public_path('carousel/' . $img));

        Carousel::create([
            'img' => $img,
            'ar_title' => $request->get('ar_title'),
            'en_title' => $request->get('en_title'),
        ]);
        return redirect()->back();

    }

    public function editCarousel(Request $request, $id)
    {
        $carousel=Carousel::find($id);
        if ($request->hasFile('img')) {
            $img = auth()->user()->id . '_' . time() . str_random(5) . '.png';
            Image::make($request->file('img'))->save(public_path('carousel/' . $img));
        } else {
            $img = $carousel->img;
        }
        $carousel->update([
            'img' => $img,
            'ar_title' => $request->get('ar_title'),
            'en_title' => $request->get('en_title'),
        ]);
        return redirect()->back();

    }

    public function deleteCarousel(Request $request, $id)
    {
        Carousel::destroy($id);
        return redirect()->back();
    }
}
