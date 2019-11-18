<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Image;
use Carbon\Carbon;
use App\Training;
use App\TrainingPage;
use App\Client;

class TrainingController extends Controller
{

    // index
    public function index()
    {
      $trainings = Training::all();
      $clients = Client::all();
      return view('training.index',compact('trainings','clients'));
    }


    // index
    public function create(Request $request)
    {
      $last_inserted_id = Training::insertGetId([
        'name' => $request->name,
        'photo' => $request->photo,
        'created_at' => Carbon::now(),
      ]);


      if ($request->hasFile('photo')) {
        $photo_upload     =  $request ->photo;
        $photo_extension  =  $photo_upload -> getClientOriginalExtension();
        $photo_name       =  $last_inserted_id . "." . $photo_extension;
        Image::make($photo_upload)->resize(255,174)->save(base_path('public/uploads/training/'.$photo_name),100);
        Training::find($last_inserted_id)->update([
        'photo'          => $photo_name,
      ]);
      }


      Alert::toast('Training Inserted Successfully','success');
      return back();
    }


    public function training_single($training_id)
    {
      $single_training_details = TrainingPage::find($training_id);
      return view('training.single',compact('single_training_details'));
    }



    // END
}
