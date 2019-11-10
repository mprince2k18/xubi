<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Alert;

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
        'active' =>1,
      ]);

      return back();
    }


    // all_users page

    function all_users()
    {
      $users = User::all();
      return view('superadmin.users.index',compact('users'));
    }

    // single_user

    function single_user($user_id)
    {
      $single_user = User::findOrFail($user_id);
      return view('superadmin.users.single',compact('single_user'));
    }

    // single_user_update

    function single_update(Request $request)
    {
      // update
      User::find($request->user_id)->update([
        'name' =>$request->name,
        'email' =>$request->email,
        'role_id' =>$request->role_id,
        'active' =>$request->active,
      ]);

      Alert::toast('Updated Successfully','success');
      return back();
    }

    // delete_user


    function delete_user($user_id){
      User::find($user_id)->delete();

      Alert::toast('Deleted Successfully','warning');
      return back();
    }


    // END
}
