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
use PDF;

class PdfController extends Controller
{
    function pdfView($single)
    {

      $single_trainee = Seip::findOrFail($single);

      $education_qualifications = EducationStatus::all();
      $working_statuses = WorkingStatus::all();
      $gender_statuses  = GenderStatus::all();
      $information_sources  = InformationSource::all();
      $seip_statuses  = SeipStatus::all();
      $remarks_statuses  = RemarksStatus::all();

      return view('dashboard.trainee_registration.pdf_view',compact('single_trainee','education_qualifications','working_statuses','gender_statuses','information_sources','seip_statuses','remarks_statuses'));
    }
}
