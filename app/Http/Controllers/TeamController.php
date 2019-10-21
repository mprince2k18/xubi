<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Team;
use Carbon\Carbon;
use Image;
use Alert;

class TeamController extends Controller
{

    function team_insert(Request $request)
    {

      $request->validate([
        'name'         =>'required',
        'designation'  =>'required',
        'team_photo'   =>'required',
      ]);


      $last_inserted_id =Team::insertGetId([
        'name'         =>$request->name,
        'designation'  =>$request->designation,
        'team_photo'   =>$request->team_photo,
        'slug'         =>Str::slug($request->name),
        'created_at'   =>Carbon::now()
      ]);


      if ($request->hasFile('team_photo')) {
        $photo_upload     =  $request ->team_photo;
        $photo_extension  =  $photo_upload -> getClientOriginalExtension();
        $photo_name       =  $last_inserted_id . "." . $photo_extension;
        Image::make($photo_upload)->resize(229,229)->save(base_path('public/uploads/team/'.$photo_name),100);
        Team::find($last_inserted_id)->update([
        'team_photo'          => $photo_name,
      ]);
      }

      Alert::success('Added', 'Team Member Added Succesfully');


      return back();
    }


// edit_team
function edit_team($team_id)
{
  $single_team_member = Team::find($team_id);
  return view('dashboard.team.edit',compact('single_team_member'));
}


// delete_team
function delete_team($team_id)
{
  Team::find($team_id)->delete();

  Alert::success('Deleted', 'Team Member Deleted Succesfully');

  return redirect(route('team'));
}

// update_team
function update_team(Request $request)
{

  if($request->hasFile('team_photo')){
    if(Team::find($request->team_id)->team_photo=='default.png'){
      $photo_upload     = $request->team_photo;
      $photo_extension  =  $photo_upload->getClientOriginalExtension();
      $photo_name       =  $request->team_photo . "." . $photo_extension;
      Image::make($photo_upload)->resize(258,404)->save(base_path('public/uploads/team/'.$photo_name),100);
      Team::find($request->team_id)->update([
      'team_photo'          => $photo_name,
    ]);
    }


    else {
      //delete
      $delete_photo=Team::find($request->team_id)->team_photo;
      unlink(base_path('public/uploads/team/'.$delete_photo));
      //update
      $photo_upload     = $request->team_photo;
      $photo_extension  =  $photo_upload->getClientOriginalExtension();
      $photo_name       =  $request->team_id . "." . $photo_extension;
      Image::make($photo_upload)->resize(258,404)->save(base_path('public/uploads/team/'.$photo_name),100);
      Team::find($request->team_id)->update([
      'team_photo'          => $photo_name,
    ]);
    }
  }


  Team::find($request->team_id)->update([
    'name' =>$request->name,
    'designation' =>$request->designation,

  ]);

  Alert::success('Updated', 'Team Member Updated Succesfully');

  return redirect(route('team'));



}



    // END
}
