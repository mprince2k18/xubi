<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NonUserController extends Controller
{

    // index
    function index()
    {
      return view('superadmin.non_user.index');
    }


    // unknown
    function unknown()
    {
      return view('superadmin.activation.index');
    }


    // END
}
