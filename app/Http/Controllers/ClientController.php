<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Carbon\Carbon;
use Alert;
use Image;

class ClientController extends Controller
{
    function insert(Request $request)
    {

      $request->validate([
        'client_name' => 'required',
        'client_photo' =>'required',
      ]);

      $last_inserted_id = Client::insertGetId([
        'client_name' =>$request->client_name,
        'client_description' =>$request->client_description,
        'client_photo' =>$request->client_photo,
        'created_at' =>Carbon::now(),
      ]);


      if ($request->hasFile('client_photo')) {
        $photo_upload     =  $request ->client_photo;
        $photo_extension  =  $photo_upload -> getClientOriginalExtension();
        $photo_name       =  $last_inserted_id . "." . $photo_extension;
        Image::make($photo_upload)->resize(180,102)->save(base_path('public/uploads/clients/'.$photo_name),100);
        Client::find($last_inserted_id)->update([
        'client_photo'          => $photo_name,
      ]);
      }

      Alert::toast('New Client Added Seccuessfully','success');
      return back();
    }
}
