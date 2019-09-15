<?php

namespace App\Http\Controllers;

use Laravel\Scout\Searchable;

use Illuminate\Http\Request;
use App\Info;
use Carbon\Carbon;
use Image;

class InfoController extends Controller
{

  use Searchable;
  
    function index()
    {
        $infos = Info::paginate(6);
        $trashed_infos = Info::onlyTrashed()->get();
        return view('dashboard.info.index',compact('infos','trashed_infos'));
    }


    function add_info(Request $request)
    {

      $request->validate([
        'Info_headline'      => 'required',
        'Info_message'      => 'required',
        'Info_banner'      => 'required',
      ]);

        $last_inserted_id = Info::insertGetId([
        'Info_headline' => $request->Info_headline,
        'Info_message' => $request->Info_message,
        'Info_banner' => $request->Info_banner,
        'created_at' =>Carbon::now(),
      ]);


      if ($request->hasFile('Info_banner')) {
        $photo_upload     =  $request ->Info_banner;
        $photo_extension  =  $photo_upload ->getClientOriginalExtension();
        $photo_name       =  $last_inserted_id . "." . $photo_extension;
        Image::make($photo_upload)->resize(93,79)->save(base_path('public/uploads/info/'.$photo_name),100);
        Info::find($last_inserted_id)->update([
        'Info_banner'          => $photo_name,
      ]);
      }

      return back()->with('success','Info Added Successfully');
    }

    //delete_Info
    function delete_Info($info_id)
    {
      Info::findOrFail($info_id)->delete();
      return back()->with('delete','Info Deleted Successfully');
    }


    //edit banner
    function edit_info($info_id){
      $single_info_edit  =  Info::findOrFail($info_id);
      return view('dashboard.info.edit',compact('single_info_edit'));
    }

    //restore_Info
    function restore_Info($info_id)
    {
      Info::onlyTrashed()->where('id',$info_id)->restore();
      return back()->with('restore','Info Restore Successfully');
    }



    //update

    function updateInfo(Request $request)
    {

      if($request->hasFile('Info_banner')){
        if(Info::find($request->info_id)->Info_banner=='default.png'){
          $photo_upload     = $request->Info_banner;
          $photo_extension  =  $photo_upload->getClientOriginalExtension();
          $photo_name       =  $request->Info_banner . "." . $photo_extension;
          Image::make($photo_upload)->resize(93,79)->save(base_path('public/uploads/info/'.$photo_name),100);
          Info::find($request->info_id)->update([
          'Info_banner'          => $photo_name,
        ]);
        }


        else {
          //delete
          $delete_photo=Info::find($request->info_id)->Info_banner;
          unlink(base_path('public/uploads/info/'.$delete_photo));
          //update
          $photo_upload     = $request->Info_banner;
          $photo_extension  =  $photo_upload->getClientOriginalExtension();
          $photo_name       =  $request->info_id . "." . $photo_extension;
          Image::make($photo_upload)->resize(93,79)->save(base_path('public/uploads/info/'.$photo_name),100);
          Info::find($request->info_id)->update([
          'Info_banner'          => $photo_name,
        ]);
        }
      }

      Info::find($request->info_id)->update([
        'Info_headline' => $request->Info_headline,
        'Info_message' => $request->Info_message,
        // 'header_banner' => $request->header_banner,

    ]);

    return redirect('/admin/info')->with('update','Info Updated Successfully');

    }


}
