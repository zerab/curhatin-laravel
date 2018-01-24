<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function dashboard()
    {
        return view('admin.index');
    }
    public function logout()
    {
      Auth::guard('admin')->logout();
      return redirect('/')->with('alert-success-logout', 'You have been succesfully logged out.');
    }
}
