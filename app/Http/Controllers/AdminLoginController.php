<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }
    public function show()
    {
      return view('admin.login');
    }
    public function authenticate()
    {
      $email = request('email');
      $password = request('password');
      if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
        return redirect('/admin');
      }
      else {
        echo "gakbisa";
      }
    }

}
