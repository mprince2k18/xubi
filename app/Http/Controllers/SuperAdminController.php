<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class SuperAdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('common');
    }

    // index
    function index()
    {
      return view('superadmin.index');
    }

    // create
    function create(Request $request)
    {

      // Validation
      $request->validate([
        'name' =>'required',
        'email' =>'required|email|unique:users',
        'password' =>'required|confirmed|string|min:8',
        'password_confirmation' =>'required|same:password',
      ]);

      // insert
      User::insert([
        'name' =>$request->name,
        'email' =>$request->email,
        'password' =>bcrypt($request->password),
        'role_id' =>$request->role_id,
      ]);

      return back();
    }


    // all_users page

    function all_users()
    {
      $users = User::paginate(5);
      return view('superadmin.users.index',compact('users'));
    }


    // END
}
