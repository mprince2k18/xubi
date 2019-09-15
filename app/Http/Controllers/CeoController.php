<?php

namespace App\Http\Controllers;

use Laravel\Scout\Searchable;

use Illuminate\Http\Request;
use App\Ceo;
use Carbon\Carbon;
use Image;
Use Alert;


class CeoController extends Controller
{

  use Searchable;

  
    function index()
    {
      return view('dashboard.ceo.index');
    }

    function ceo_talks(Request $request)
    {

      $request->validate([
        'ceo_name'      => 'required',
        'ceo_message'   => 'required',
        'ceo_position'  => 'required',
        'ceo_photo'     => 'required',
      ]);


      $last_inserted_id = Ceo::insertGetId([
      'ceo_name' => $request->ceo_message,
      'ceo_message' => $request->ceo_message,
      'ceo_position' => $request->ceo_position,
      'ceo_photo' => $request->ceo_photo,
      'created_at' =>Carbon::now(),
    ]);


    if ($request->hasFile('ceo_photo')) {
      $photo_upload     =  $request ->ceo_photo;
      $photo_extension  =  $photo_upload ->getClientOriginalExtension();
      $photo_name       =  $last_inserted_id . "." . $photo_extension;
      Image::make($photo_upload)->resize(120,120)->save(base_path('public/uploads/ceo/'.$photo_name),100);
      Ceo::find($last_inserted_id)->update([
      'ceo_photo'          => $photo_name,
    ]);
    }

    Alert::success('Ceo Message Added Succesfully', 'Thank you');

    return back()->with('success', 'Ceo Message Added Succesfully');
    }
}
