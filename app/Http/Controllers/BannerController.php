<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use Carbon\Carbon;
use Image;

class BannerController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }


    function add_header_slider(Request $request)
    {

      $request->validate([
        'header_headline'      => 'required',
        'header_message'   => 'required',
        'header_banner'  => 'required',
      ]);


      $last_inserted_id = Banner::insertGetId([
        'header_headline' => $request->header_headline,
        'header_message' => $request->header_message,
        'header_banner' => $request->header_banner,
        'created_at' =>Carbon::now()
      ]);

      if ($request->hasFile('header_banner')) {
        $photo_upload     =  $request ->header_banner;
        $photo_extension  =  $photo_upload -> getClientOriginalExtension();
        $photo_name       =  $last_inserted_id . "." . $photo_extension;
        Image::make($photo_upload)->resize(1600,800)->save(base_path('public/uploads/banner/'.$photo_name),100);
        Banner::find($last_inserted_id)->update([
        'header_banner'          => $photo_name,
      ]);
      }

      return back()->with('success','Added Successfully');
    }


    //Delete Products
    function delete_banner($banner_id){
     // Products::where('id','=',$product_id)->delete();
     Banner::findOrFail($banner_id)->delete();
     return back()->with('delete','Deleted Successfully');
   }


   //edit banner
      function edit_banner($banner_id){
      $single_banner_edit  =  Banner::findOrFail($banner_id);
      return view('dashboard.header.edit',compact('single_banner_edit'));
    }

    //Delete Products
      function restore_banner($banner_id){
      Banner::onlyTrashed()->where('id',$banner_id)->restore();
      return back()->with('restore','Restored Successfully');
    }



    //update

    function updateBanner(Request $request)
    {

      if($request->hasFile('header_banner')){
        if(Banner::find($request->banner_id)->header_banner=='default.png'){
          $photo_upload     = $request->header_banner;
          $photo_extension  =  $photo_upload->getClientOriginalExtension();
          $photo_name       =  $request->header_banner . "." . $photo_extension;
          Image::make($photo_upload)->resize(1600,800)->save(base_path('public/uploads/banner/'.$photo_name),100);
          Banner::find($request->banner_id)->update([
          'header_banner'          => $photo_name,
        ]);
        }
        else {
          //delete
          $delete_photo=Banner::find($request->banner_id)->header_banner;
          unlink(base_path('public/uploads/banner/'.$delete_photo));
          //update
          $photo_upload     = $request->header_banner;
          $photo_extension  =  $photo_upload->getClientOriginalExtension();
          $photo_name       =  $request->banner_id . "." . $photo_extension;
          Image::make($photo_upload)->resize(1600,800)->save(base_path('public/uploads/banner/'.$photo_name),100);
          Banner::find($request->banner_id)->update([
          'header_banner'          => $photo_name,
        ]);
        }
      }

      Banner::find($request->banner_id)->update([
        'header_headline' => $request->header_headline,
        'header_message' => $request->header_message,
        // 'header_banner' => $request->header_banner,

    ]);

    return redirect('/admin/header/slider')->with('update','Updated Successfully');

    }

// END

}
