<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;

class ContactCenterController extends Controller
{
    public function index()
    {
      $trainings = Training::all();
      return view('contact_center.index',compact('trainings'));
    }


    // END
}
