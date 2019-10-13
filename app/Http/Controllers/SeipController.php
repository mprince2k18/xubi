<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seip;
use Carbon\Carbon;

class SeipController extends Controller
{
    function index()
    {
      return view('trainee_registration.seip.index');
    }


    function create(Request $request)
    {
      Seip::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'university'=>$request->university,
        'nid'=>$request->nid,
        'rocket_number'=>$request->rocket_number,
        'educational_qualification'=>$request->educational_qualification,
        'working_status'=>$request->working_status,
        'have_seip'=>$request->have_seip,
        'created_at'=>Carbon::now(),
      ]);

      Alert::toast('Registration Successfull','success');

      return back();

    }

    // END
}
