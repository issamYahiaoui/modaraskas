<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use League\Flysystem\Exception;
use Socialite;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }




    protected function credentials(Request $request)
    {
        $credentials = $request->only($this->username(), 'password');
        $credentials['active'] = 1;
        return $credentials;
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'login' => ['required'],
            'password' => ['required']
        ]);

        // Determine if the field is an email address or phone number (look for @ symbol)
        $field = strpos($request->input('login'), '@') ? 'email' : 'phone';

        // Set up the login attempt
        $credentials = [
            $field => $request->input('login'),
            'password' => $request->input('password'),
            'active' => 1
        ];

        // Attempt to auth the user
        if (Auth::attempt($credentials)) {
            // Login success
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }


    protected function authenticated(Request $request, $user)
    {

        return redirect($this->redirectTo);

    }


}
