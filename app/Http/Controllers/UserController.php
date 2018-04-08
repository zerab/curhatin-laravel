<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
      $users = DB::table('users')->paginate(6);
      return view('admin.user.index')->with(['users' => $users]);
    }
    public function store()
    {
      $this->validate(request(), [
            'firstname' => 'required|string|max:32',
            'lastname' => 'required|string|max:32',
            'username' => 'required|string|max:32',
            'email' => 'required|string|email|max:64|unique:users',
            'birthplace' => 'required|max:64',
            'gender' => 'required|max:1',
            'phone' => 'required|digits_between:10,15|numeric',
            'password' => 'required|string|min:6|confirmed',
        ]);
      $user = User::create([
          'firstname' => request('firstname'),
          'lastname' => request('lastname'),
          'username' => request('username'),
          'email' => request('email'),
          'birthplace' => request('birthplace'),
          'birthdate' => request('birthdate'),
          'gender' => request('gender'),
          'phone' => request('phone'),
          'password' => bcrypt(request('password'))
      ]);
      $user->save();
      return redirect('/admin/user');
    }
    public function edit($id)
    {
      $user = User::find($id);
      
    }
}
