<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkingStatus;
use App\GenderStatus;
use App\InformationSource;
use App\SeipStatus;
use App\RemarksStatus;
use Alert;

class StatusController extends Controller
{

  // add_working_status
  function add_working_status (Request $request)
  {
    $working_statuses = WorkingStatus::insert($request->except('_token'));

        Alert::toast('Working Status Added','success');

        return back();
  }
  // add_gender_status


  function add_gender_status (Request $request)
  {
    $gender_statuses = GenderStatus::insert($request->except('_token'));

        Alert::toast('Gender Status Added','success');

        return back();
  }


  // add_information_source


  function add_information_source (Request $request)
  {
    $information_sources = InformationSource::insert($request->except('_token'));

        Alert::toast('Gender Status Added','success');

        return back();
  }
  // add_seip_status


  function add_seip_status (Request $request)
  {
    $seip_statuses = SeipStatus::insert($request->except('_token'));

        Alert::toast('Seip Status Added','success');

        return back();
  }
  // add_remarks_status


  function add_remarks_status (Request $request)
  {
    $remarks_statuses = RemarksStatus::insert($request->except('_token'));

        Alert::toast('Remarks Status Added','success');

        return back();
  }

  // END
}
