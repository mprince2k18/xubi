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

  // index
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

// create
    function create(Request $request)
    {

      $request->validate([
        'trainee_id'=>'unique:seips',
        'name'=>'required|string|max:60',
        'email'=>'required|unique:seips|email|max:80',
        'phone'=>'required|numeric|unique:seips|min:11',
        'university'=>'required|string',
        'nid'=>'required|numeric|unique:seips|min:10',
        'gender'=>'required',
        'information_source'=>'required',
        'rocket_number'=>'nullable|numeric|min:13',
        'educational_qualification'=>'required',
        'working_status'=>'required',
        'have_seip'=>'required',

      ],[
        'name.required'  =>  'Applicant Full Name Is Required.',
        'email.email'    => 'You must enter your valid email address.',
        'email.required' => 'Applicant Email Is Required.',
        'phone.required' => 'Contact No Is Required.',
        'university.required' => 'Academic Institution Is Required.',
        'nid.required' => 'Applicant NID Is Required.',
        'gender.required' => 'Gender Is Required.',
        'information_source.required' => 'Please Fill Information Source.',
        'educational_qualification.required' => 'Please Fill Academic Qualification.',
        'working_status.required' => 'Please Fill Current Working Status.',
        'have_seip.required' => 'Please Fill SEIP Training Before',
      ]);

      $quarter = 8;

      $last_inserted_id = Seip::insertGetId([
        'trainee_id'=>'XLSEIPBQ'. $quarter . rand(100,1000),
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

// interested_trainee_index

    function interested_trainee_index()
    {
      $Seip_registered_trainees = Seip::all();
      return view('dashboard.trainee_registration.interested_trainee.index',compact('Seip_registered_trainees'));
    }

// single_trainee_index

    function single_trainee_index($single)
    {
      $single_trainee = Seip::findOrFail($single);

      $education_qualifications = EducationStatus::all();
      $working_statuses = WorkingStatus::all();
      $gender_statuses  = GenderStatus::all();
      $information_sources  = InformationSource::all();
      $seip_statuses  = SeipStatus::all();
      $remarks_statuses  = RemarksStatus::all();

      return view('dashboard.trainee_registration.single_view',compact('single_trainee','education_qualifications','working_statuses','gender_statuses','information_sources','seip_statuses','remarks_statuses'));
    }

// single_trainee_edit





// Update

function update(Request $request)
{
  Seip::find($request->id)->update([
    'name'=>$request->name,
    'email'=>$request->email,
    'phone'=>$request->phone,
    'university'=>$request->university,
    'nid'=>$request->nid,
    'gender'=>$request->gender,
    'information_source'=>$request->information_source,
    'rocket_number'=>$request->rocket_number,
    'educational_qualification'=>$request->educational_qualification,
    'working_status'=>$request->working_status,
    'have_seip'=>$request->have_seip,
    'remarks'=>$request->remarks,
  ]);

  Alert::success('Profile updated','Success');

  return back();



}

    // END
}
