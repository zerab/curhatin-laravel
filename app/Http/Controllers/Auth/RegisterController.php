<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create()
    {
    /* $this->validate(request(), [
          'firstname' => 'required|string|max:32',
          'lastname' => 'required|string|max:32',
          'email' => 'required|string|email|max:64|unique:users',
          'birthplace' => 'required|max:64',
          'gender' => 'required|max:1',
          'phone' => 'required|min:6|max:16|numeric',
          'password' => 'required|string|min:6|confirmed',
          'password_confirmation' => 'required|string|min:6|confirmed'
      ]);
*/
      $user = User::create([
          'firstname' => request('firstname'),
          'lastname' => request('lastname'),
          'email' => request('email'),
          'birthplace' => request('birthplace'),
          'gender' => request('gender'),
          'phone' => request('phone'),
          'password' => bcrypt(request('password'))
      ]);
      $user->save();
      return redirect('/');
    }
}
