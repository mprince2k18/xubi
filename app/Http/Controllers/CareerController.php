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
      $careers = Career::paginate(10);
      return view('career.index',compact('careers'));
    }


    public function career_create(Request $request)
    {
      Career::insert([
        'post_name'=>$request->post_name,
        'schedule'=>$request->schedule,
        'salary_range'=>$request->salary_range,
        'educational_background'=>$request->educational_background,
        'job_experience'=>$request->job_experience,
        'deadline'=>$request->deadline,
        'job_description'=>$request->job_description,
        'key_requirements'=>$request->key_requirements,
        'required_skills'=>$request->required_skills,
        'created_at'=>Carbon::now(),
      ]);

      Alert::toast('New career Post Added','success');
      return back();
    }


    public function single_career($career_id)
    {
      $single_career = Career::find($career_id);
      return view('career.single_career',compact('single_career'));
    }

// END

}
