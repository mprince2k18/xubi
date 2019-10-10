<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;
use Alert;
use Carbon\Carbon;

class CareerController extends Controller
{
    public function index()
    {
      $careers = Career::all();
      return view('career.index',compact('careers'));
    }


    public function career_create(Request $request)
    {
      Career::insert([
        'post_name'=>$request->post_name,
        'schedule'=>$request->schedule,
        'salary_range'=>$request->salary_range,
        'educational_background'=>$request->educational_background,
        'created_at'=>Carbon::now(),
      ]);

      Alert::toast('New career Post Added','success');
      return back();
    }


}
