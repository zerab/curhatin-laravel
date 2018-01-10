<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\MessageBag;

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

    public function authenticate()
    {
      $email = request('email');
      $password = request('password');
      if ($user = Auth::attempt(['email' => $email, 'password' => $password]))
      {
         return redirect('/home')->with('alert-success-login', 'You have been succesfully logged in.');
      }
      else
      {
        $errors = new MessageBag(['password' => ["Your email/password doesn't match."]]);
        return redirect('/')->withErrors($errors)->with('password');
      }
    }

    public function logout()
    {
      Auth::logout();
      return redirect('/')->with('alert-success-logout', 'You have been succesfully logged out.');
    }
}
