<?php

namespace App\Http\Controllers;

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
      $users = DB::table('users')->paginate(5);
      return view('admin.user.index')->with(['users' => $users]);
    }
}
