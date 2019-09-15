<?php

namespace App\Http\Controllers;

use Laravel\Scout\Searchable;

use Illuminate\Http\Request;
use App\CompanyService;
use App\Category;
use Carbon\Carbon;
use Image;
use Alert;

class CompanyServiceController extends Controller
{

  use Searchable;

  
    function add_service(Request $request)
    {

      $request->validate([
        'service_name'             => 'required',
        'service_category_id'      => 'required',
        'service_photo'            => 'required',
        'slug_name'            => 'required',
      ]);





      $last_inserted_id =CompanyService::insertGetId([
        'service_name'         =>$request->service_name,
        'service_category_id'  =>$request->service_category_id,
        'service_photo'        =>$request->service_photo,
        'slug_name'        =>$request->slug_name,
        'created_at'           =>Carbon::now()
      ]);


      if ($request->hasFile('service_photo')) {
        $photo_upload     =  $request ->service_photo;
        $photo_extension  =  $photo_upload -> getClientOriginalExtension();
        $photo_name       =  $last_inserted_id . "." . $photo_extension;
        Image::make($photo_upload)->resize(800,600)->save(base_path('public/uploads/service/'.$photo_name),100);
        CompanyService::find($last_inserted_id)->update([
        'service_photo'          => $photo_name,
      ]);
      }

      Alert::success('Added', 'Service Added Succesfully');

      return back()->with('success', 'Service Added Succesfully');
    }




       //
       //  //Delete Products
       //  function delete_banner($banner_id){
       //   // Products::where('id','=',$product_id)->delete();
       //   CompanyService::findOrFail($banner_id)->delete();
       //   return back()->with('delete','Deleted Successfully');
       // }


       // edit_service
          function edit_service($service_id){
            $service_categories = Category::all();
          $single_service_edit  =  CompanyService::findOrFail($service_id);
          return view('dashboard.services.edit',compact('single_service_edit','service_categories'));
        }

        // // Restored Products
        //   function restore_banner($banner_id){
        //   CompanyService::onlyTrashed()->where('id',$banner_id)->restore();
        //   return back()->with('restore','Restored Successfully');
        // }



        //update

        function update_service(Request $request)
        {

          if($request->hasFile('service_photo')){
            if(CompanyService::find($request->service_id)->service_photo=='default.png'){
              $photo_upload     = $request->service_photo;
              $photo_extension  =  $photo_upload->getClientOriginalExtension();
              $photo_name       =  $request->service_photo . "." . $photo_extension;
              Image::make($photo_upload)->resize(800,600)->save(base_path('public/uploads/service/'.$photo_name),100);
              CompanyService::find($request->service_id)->update([
              'service_photo'          => $photo_name,
            ]);
            }
            else {
              //delete
              $delete_photo=CompanyService::find($request->service_id)->service_photo;
              unlink(base_path('public/uploads/service/'.$delete_photo));
              //update
              $photo_upload     = $request->service_photo;
              $photo_extension  =  $photo_upload->getClientOriginalExtension();
              $photo_name       =  $request->service_id . "." . $photo_extension;
              Image::make($photo_upload)->resize(800,600)->save(base_path('public/uploads/service/'.$photo_name),100);
              CompanyService::find($request->service_id)->update([
              'service_photo'          => $photo_name,
            ]);
            }
          }

          CompanyService::find($request->service_id)->update([
            'service_name'         =>$request->service_name,
            'service_category_id'  =>$request->service_category_id,
            'slug_name'  =>$request->slug_name,
            // 'service_photo' => $request->service_photo,

        ]);

        Alert::success('Service Editted Succesfully', 'Thank you');

        return redirect(route('service_index'))->with('success','Updated Successfully');

        }








    // END
}
