<?php

namespace App\Http\Controllers;



use App\HighSchoolStage;
use App\Message;
use App\Notifications\CreateCustomerNewNotification;
use App\SchoolStage;
use App\Specialization;
use App\TeachingType;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Spatie\Permission\Models\Role;
use Notification;


class UserController extends Controller
{


    public function __construct()
    {
        $newMessages = Message::where('read', 0)->get();
        \view()->share([
            'newMessages' => $newMessages
        ]);
        $this->middleware('auth') ;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'password' => 'required|confirmed',
            'email' => 'required|email|unique:users',
            'address' => 'required',
            'mobile' => 'required|unique:users',
            'type' => 'required',
        ];


        $this->validate($request, $rules);
        $type = $request->get('type');

        $user = User::create([
            'name' => $request->get('name'),
            'firstName' => $request->get('firstName'),
            'lastName' => $request->get('lastName'),
            'password' => bcrypt($request->get('password')),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'mobile' => $request->get('mobile'),
            'gender' => $request->get('gender'),
            'age' => $request->get('age'),
            'active' => 1,
            'type' => $type
        ]);

        Session::Flash('success', __('dashboard.success'));

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required',
        ];


        $this->validate($request, $rules);
        User::find($id)->update([
            'name' => $request->get('name'),
            'firstName' => $request->get('firstName'),
            'lastName' => $request->get('lastName'),
            'password' => bcrypt($request->get('password')),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'mobile' => $request->get('mobile'),
            'gender' => $request->get('gender'),
            'age' => $request->get('age')
        ]);

        return Redirect::back();
    }

    /**
     * Reactivate the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function activate(Request $request, $id)
    {
        User::find($id)->update([
            'active' => true
        ]);
        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->update([
            'active' => false
        ]);

        return Redirect::back();

    }


    public function profile()
    {
        return view('front.user-space.profile')->with([
            'active' => 'profile',
            'title' => __('lang.profile'),

        ]);
    }



    public function changePassword(Request $request)
    {

        $rules = [
            'password' => 'required',
            'new_password' => 'required|confirmed'
        ];


        $this->validate($request, $rules);

        if (Hash::check($request->get('password'), Auth::user()->password)) {
            User::find(Auth::user()->id)->update([
                'password' => bcrypt($request->get('new_password'))
            ]);
            Session::Flash('successPassword', 'The password changed with success');
        } else {
            Session::Flash('failedPassword', 'The old password is wrong !');
        }
        return Redirect::back();
    }


    public function changeAvatar(Request $request)
    {
        $rules = [
            'img' => 'image|mimes:jpeg,jpg,png,gif|required|max:20000'
        ];

        $this->validate($request, $rules);
        if (Auth::user()->avatar != 'default-avatar.png') {
            File::Delete('avatar/' . Auth::user()->avatar);
        }
        $img = Auth::user()->id . time() . '.png';
        Image::make($request->file('img'))->save(public_path('avatar/' . $img));
        User::find(Auth::user()->id)->update(['avatar' => $img]);
        Session::Flash('success', __('dashboard.success'));
        return Redirect::back();
    }


    public function allUsers($role)
    {

            $users=User::all();
            $title=__('dashboard.users');




        return view('admin.user.allUsers')->with([
            'users' => $users,
            'title' => $title,
            'active' => $role,
        ]);
    }

    public function addUser()
    {
        return view('admin.user.addUser')->with([
            'title' => __('dashboard.addUser'),
            'active' => 'users'
        ]);
    }

    public function readNotification()
    {
        foreach (auth()->user()->unreadNotifications as $not) {
            $not->markAsRead();
        }
        return Response::json([], 200);
    }

    public function activation($id,$activationCode){
        $user = User::where('id',$id)->first();
        if ($user->activationCode==$activationCode){
            $user->activationCode='';
            $user->active=1;
            $user->save();

            Auth::guard()->login($user);
            return redirect('/profile');
        }else{
            echo 'failed';
        }
    }


    public function changeLocation (Request $request , $id){

        $user =User::find($id)->update([
            'country' => $request->get('country'),
            'city' => $request->get('city'),
            'lat' => $request->get('lat'),
            'lng' => $request->get('lng'),
        ]) ;
        Session::Flash('success', __('dashboard.success'));
        return Redirect::back();
    }




}
