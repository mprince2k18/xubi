<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seip;
use Carbon\Carbon;
use App\EducationStatus;
use App\WorkingStatus;
use App\FatherWorkingStatus;
use App\MotherWorkingStatus;
use App\GenderStatus;
use App\InformationSource;
use App\SeipStatus;
use App\RemarksStatus;
use App\Quarter;
use Alert;
use Auth;
use Mail;
use App\Mail\SendingMail;
use App\Mail\SelectedMail;
use App\Mail\WaitingMail;
use App\Mail\RejectedMail;
use App\Mail\VivaMail;

class SeipController extends Controller
{


  public function __construct()
  {
      $this->middleware('common');
  }


  // index
    function index()
    {
      $education_qualifications = EducationStatus::all();
      $working_statuses = WorkingStatus::all();
      $father_working_statuses = FatherWorkingStatus::all();
      $mother_working_statuses = MotherWorkingStatus::all();
      $gender_statuses  = GenderStatus::all();
      $information_sources  = InformationSource::all();
      $seip_statuses  = SeipStatus::all();
      $remarks_statuses  = RemarksStatus::all();
      return view('trainee_registration.seip.index',compact('education_qualifications','working_statuses','father_working_statuses','mother_working_statuses','gender_statuses','information_sources','seip_statuses','remarks_statuses'));
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
        'father_name'=>'required',
        'father_occupation'=>'required',
        'mother_name'=>'required',
        'mother_occupation'=>'required',
        'alt_phone'=>'required|numeric|min:11',
        'siblings'=>'required|numeric',
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
        'father_name'=>'Please Fill Father Name.',
        'father_occupation'=>'Please Fill Father Occupation.',
        'mother_name'=>'Please Fill Mother Name.',
        'mother_occupation'=>'Please Fill Mother Occupation.',
        'alt_phone'=>'Please Fill Alternative Phone No.',
        'siblings'=>'Please Fill How Many Siblings?.',
        'working_status.required' => 'Please Fill Current Working Status.',
        'have_seip.required' => 'Please Fill SEIP Training Before',
      ]);


// ------------------------------

  // Quarter_number

      $quarters = Quarter::where('status',1)->first();
      $quarter_name = $quarters->quarter;

// ------------------------------


      $last_inserted_id = Seip::insertGetId([
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
        'father_name'=>$request->father_name,
        'father_occupation'=>$request->father_occupation,
        'mother_name'=>$request->mother_name,
        'mother_occupation'=>$request->mother_occupation,
        'alt_phone'=>$request->alt_phone,
        'siblings'=>$request->siblings,
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


    // trainee_index page

    function trainee_index()
    {
      $Seip_registered_trainees = Seip::latest()->get();
      return view('dashboard.trainee_registration.index',compact('Seip_registered_trainees'));
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
      $father_working_statuses  = FatherWorkingStatus::all();
      $mother_working_statuses  = MotherWorkingStatus::all();

      return view('dashboard.trainee_registration.single_view',compact('single_trainee','education_qualifications','father_working_statuses','mother_working_statuses','working_statuses','gender_statuses','information_sources','seip_statuses','remarks_statuses'));
    }

// single_trainee_edit





// Update

function update(Request $request)
{

  //quarter_name

  $quarters = Quarter::where('status',1)->first();
  $quarter_name = $quarters->quarter;

// update

  Seip::find($request->id)->update([




    // 'trainee_id'=>"XLSEIP".$quarter_name.$request->id,
    'name'=>$request->name,
    'email'=>$request->email,
    'phone'=>$request->phone,
    'university'=>$request->university,
    'nid'=>$request->nid,
    'gender'=>$request->gender,
    'father_name'=>$request->father_name,
    'father_occupation'=>$request->father_occupation,
    'mother_name'=>$request->mother_name,
    'mother_occupation'=>$request->mother_occupation,
    'information_source'=>$request->information_source,
    'rocket_number'=>$request->rocket_number,
    'educational_qualification'=>$request->educational_qualification,
    'working_status'=>$request->working_status,
    'father_name'=>$request->father_name,
    'father_occupation'=>$request->father_occupation,
    'mother_name'=>$request->mother_name,
    'mother_occupation'=>$request->mother_occupation,
    'alt_phone'=>$request->alt_phone,
    'siblings'=>$request->siblings,
    'have_seip'=>$request->have_seip,
    'remarks'=>$request->remarks,
    'updated_at'=>Carbon::now(),
  ]);


  if ($request->remarks == 2) {
    Seip::find($request->id)->update([
      'trainee_id'=>"XLSEIP".$quarter_name.$request->id,
    ]);
  }



  Alert::success('Profile updated','Success');


  $name = $request->name;
  $email = $request->email;

// SelectedMail

  if ($request->remarks == 2)
      {
        Mail::to($email,$name)->cc('fahadidb@gmail.com')
                              ->send(new SelectedMail($name));
      }


// WaitingMail

  if ($request->remarks == 3)
      {
        Mail::to($email,$name)->cc('fahadidb@gmail.com')
                              ->send(new WaitingMail($name));
      }

// VivaMail

  if ($request->remarks == 4)
      {
        Mail::to($email,$name)->cc('fahadidb@gmail.com')
                              ->send(new VivaMail($name));
      }

// RejectedMail

  if ($request->remarks == 5)
      {
        Mail::to($email,$name)->cc('fahadidb@gmail.com')
                              ->send(new RejectedMail($name));
      }



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
