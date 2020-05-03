<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//to used in authenticated() 
use Illuminate\Http\Request;
use Carbon\Carbon;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //to replace email to username to pass it on login.blade.php
    public function username()
    {
      return 'username';
    }

    //override  authenticated() method in the AuthenticatesUsers trait,It’s called every time someone logs in.
    function authenticated(Request $request, $user)
      {
          $user->update([
              'last_login_at' => Carbon::now()->toDateTimeString(),
              'last_login_ip' => $request->getClientIp()
          ]);
      }
}
