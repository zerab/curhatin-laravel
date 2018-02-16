<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function view()
    {
      $user = Auth::user()->paginate(1);
      return view('account.view')->with('user', $user);
    }
}
