<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seip;
use Carbon\Carbon;
use App\EducationStatus;
use App\WorkingStatus;
use App\GenderStatus;
use App\InformationSource;
use App\SeipStatus;
use App\RemarksStatus;
use Alert;

class SeipController extends Controller
{
    function index()
    {
      $education_qualifications = EducationStatus::all();
      $working_statuses = WorkingStatus::all();
      $gender_statuses  = GenderStatus::all();
      $information_sources  = InformationSource::all();
      $seip_statuses  = SeipStatus::all();
      $remarks_statuses  = RemarksStatus::all();
      return view('trainee_registration.seip.index',compact('education_qualifications','working_statuses','gender_statuses','information_sources','seip_statuses','remarks_statuses'));
    }


    function create(Request $request)
    {

      $quarter = 8;

      $last_inserted_id = Seip::insertGetId([
        'trainee_id'=>'XLSEIPBQ' . rand(100,1000),
        'quarter_id'=>'Q8',
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'university'=>$request->university,
        'nid'=>$request->nid,
        'gender'=>$request->gender,
        'information_source'=>$request->information_source,
        // 'rocket_number'=>$request->rocket_number,
        'educational_qualification'=>$request->educational_qualification,
        'working_status'=>$request->working_status,
        'have_seip'=>$request->have_seip,
        'remarks'=>1,
        'created_at'=>Carbon::now(),
      ]);

      Alert::success('Successfully', 'Done');

      return back();

    }


    function interested_trainee_index()
    {
      $Seip_registered_trainees = Seip::all();
      return view('dashboard.trainee_registration.interested_trainee.index',compact('Seip_registered_trainees'));
    }

    function single_trainee_index($single)
    {
      $single_trainee = Seip::findOrFail($single);
      return view('dashboard.trainee_registration.single_view',compact('single_trainee'));
    }





    // END
}
