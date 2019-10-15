<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EducationStatus;
use Alert;

class EducationStatusController extends Controller
{
    function add_education_qualification(Request $request)
    {
      $education_qualifications = EducationStatus::insert($request->except('_token'));

          Alert::toast('Education Qualification','success');

          return back();
    }


// END
}
