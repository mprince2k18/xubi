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
use App\Quarter;
use Alert;
use Mail;
use App\Mail\SendingMail;

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


// ------------------------------

  // last_id generate

  // $last_id = Seip::latest()->first();
  // $trainee_unq_id = $last_id + 1;

  $last = 800; // This is fetched from database
  $last++;
  $trainee_id_number = sprintf($last);

  // Quarter_number generate

   $quarters = Quarter::where('status',1)->first();
   $quarter_name = $quarters->quarter;

// ------------------------------


      $last_inserted_id = Seip::insertGetId([
        'trainee_id'=>'XLSEIPB'. $quarter_name . $trainee_id_number,
        // 'trainee_id'=>'XLSEIPB'. $quarter_name . $x++,
        'quarter_id'=>$quarter_name,
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

      $name = $request->name;
      $email = $request->email;

      Mail::to($email,$name)->cc('fahadidb@gmail.com')
                            ->send(new SendingMail($name));

      return back();

    }

// interested_trainee_index

    function interested_trainee_index()
    {
      $interested_registered_trainees = Seip::where('remarks',1)->get();
      return view('dashboard.trainee_registration.interested_trainee.index',compact('interested_registered_trainees'));
    }

// selected_trainee_index

    function selected_trainee_index()
    {
      $slected_trainees = Seip::where('remarks',2)->get();
      return view('dashboard.trainee_registration.selected_trainee.index',compact('slected_trainees'));

    }
// waited_trainee_index

    function waiting_trainee_index()
    {
      $waiting_trainees = Seip::where('remarks',3)->get();
      return view('dashboard.trainee_registration.waiting_trainee.index',compact('waiting_trainees'));

    }
// waited_trainee_index

    function rejected_trainee_index()
    {
      $rejected_trainees = Seip::where('remarks',5)->get();
      return view('dashboard.trainee_registration.rejected_trainee.index',compact('rejected_trainees'));

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
    'updated_at'=>Carbon::now(),
  ]);

  Alert::success('Profile updated','Success');

  return back();
}

// quarter_index

 function quarter_index()
 {

   $quarters = Quarter::all();
   return view('dashboard.trainee_registration.quarter.index',compact('quarters'));
 }

// quarter_insert

 function quarter_insert(Request $request)
 {

   Quarter::insert([
     'quarter' =>$request->quarter,
     'status' =>2,
   ]);

   Alert::toast('Quarter Added','success');

   return back();
 }
// quarter_status_update

 function quarter_status_edit($quarter)
 {


 }







    // END
}
