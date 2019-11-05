<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\CompanyService;
use App\Category;
use App\Services;
use Carbon\Carbon;
use Image;
use Alert;

class ServicesController extends Controller
{

  // Start

        // services
        public function services()
        {
            $company_all_services = CompanyService::all();
            $company_all_categories = Category::all();
            return view('services.services',compact('company_all_services','company_all_categories'));
        }

        // single_service_index
        public function index($service_id)
        {
            $single_service_info = Category::findOrFail($service_id);
            $single_service_deatils = Services::findOrFail($service_id);
            return view('services.index',compact('single_service_info','single_service_deatils'));

            // 404 Error

          if (Route::has('/services/{service_id}')) {
            $single_service_info = Category::findOrFail($service_id);
            return view('services.index',compact('single_service_info'));
          }
          else {
            abort(404);
          }


        }

        // single_service_index
        function create(Request $request)
        {
          //
          $request->validate([
            'title'                     => 'required',
            'sub_title'                 => 'required',
            'title_watermark_single'    => 'required|max:1|min:1',
            'service_category_id'       => 'required',
            'title_banner'              => 'required',
          ]);

          $last_inserted_id = Services::insertGetId([
            'title'                         =>$request->title,
            'sub_title'                     =>$request->sub_title,
            'title_watermark_single'        =>$request->title_watermark_single,
            'service_category_id'           =>$request->service_category_id,
            'title_banner'                  =>$request->title_banner,
            'title_watermark_full'          =>$request->title,
            'about_service_title'           =>$request->about_service_title,
            'details_about_service'         =>$request->details_about_service,
            'service_info_banner'           =>$request->service_info_banner,
            'service_info_details'          =>$request->service_info_details,
            'service_info_items_1'          =>$request->service_info_items_1,
            'service_info_items_2'          =>$request->service_info_items_2,
            'service_info_items_3'          =>$request->service_info_items_3,
            'service_process_1'             =>$request->service_process_1,
            'service_process_details_1'     =>$request->service_process_details_1,
            'service_process_banner_1'      =>$request->service_process_banner_1,
            'service_process_2'             =>$request->service_process_2,
            'service_process_details_2'     =>$request->service_process_details_2,
            'service_process_banner_2'      =>$request->service_process_banner_2,
            'service_process_3'             =>$request->service_process_3,
            'service_process_details_3'     =>$request->service_process_details_3,
            'service_process_banner_3'      =>$request->service_process_banner_3,
            'service_process_4'             =>$request->service_process_4,
            'service_process_details_4'     =>$request->service_process_details_4,
            'service_process_banner_4'      =>$request->service_process_banner_4,
            'service_process_5'             =>$request->service_process_5,
            'service_process_details_5'     =>$request->service_process_details_5,
            'service_process_banner_5'      =>$request->service_process_banner_5,
            'created_at'                    =>Carbon::now(),
          ]);


          // title_banner

          if ($request->hasFile('title_banner')) {
            $photo_upload     =  $request->title_banner;
            $photo_extension  =  $photo_upload-> getClientOriginalExtension();
            $photo_name       =  $last_inserted_id . "." . $photo_extension;
            Image::make($photo_upload)->resize(725,350)->save(base_path('public/uploads/service_items/'.$photo_name),100);
            Services::find($last_inserted_id)->update([
            'title_banner'          => $photo_name,
          ]);
          }

          // service_info_banner

          if ($request->hasFile('service_info_banner')) {
            $photo_upload     =  $request->service_info_banner;
            $photo_extension  =  $photo_upload-> getClientOriginalExtension();
            $photo_name       =  $last_inserted_id . "." . $photo_extension;
            Image::make($photo_upload)->resize(570,377)->save(base_path('public/uploads/service_items/service_info/'.$photo_name),100);
            Services::find($last_inserted_id)->update([
            'service_info_banner'          => $photo_name,
          ]);
          }

          //
          // // service_process_banner_1

          if ($request->hasFile('service_process_banner_1')) {
            $photo_upload     =  $request->service_process_banner_1;
            $photo_extension  =  $photo_upload-> getClientOriginalExtension();
            $photo_name       =  $last_inserted_id . "." . $photo_extension;
            Image::make($photo_upload)->resize(445,280)->save(base_path('public/uploads/service_items/service_process_1/'.$photo_name),100);
            Services::find($last_inserted_id)->update([
            'service_process_banner_1'          => $photo_name,
          ]);
          }
          //
          // service_process_banner_2

          if ($request->hasFile('service_process_banner_2')) {
            $photo_upload     =  $request->service_process_banner_2;
            $photo_extension  =  $photo_upload-> getClientOriginalExtension();
            $photo_name       =  $last_inserted_id . "." . $photo_extension;
            Image::make($photo_upload)->resize(445,280)->save(base_path('public/uploads/service_items/service_process_2/'.$photo_name),100);
            Services::find($last_inserted_id)->update([
            'service_process_banner_2'          => $photo_name,
          ]);
          }

          // service_process_banner_3

          if ($request->hasFile('service_process_banner_3')) {
            $photo_upload     =  $request->service_process_banner_3;
            $photo_extension  =  $photo_upload-> getClientOriginalExtension();
            $photo_name       =  $last_inserted_id . "." . $photo_extension;
            Image::make($photo_upload)->resize(445,280)->save(base_path('public/uploads/service_items/service_process_3/'.$photo_name),100);
            Services::find($last_inserted_id)->update([
            'service_process_banner_3'          => $photo_name,
          ]);
          }

          // service_process_banner_4

          if ($request->hasFile('service_process_banner_4')) {
            $photo_upload     =  $request->service_process_banner_4;
            $photo_extension  =  $photo_upload-> getClientOriginalExtension();
            $photo_name       =  $last_inserted_id . "." . $photo_extension;
            Image::make($photo_upload)->resize(445,280)->save(base_path('public/uploads/service_items/service_process_4/'.$photo_name),100);
            Services::find($last_inserted_id)->update([
            'service_process_banner_4'          => $photo_name,
          ]);
          }

          // service_process_banner_5

          if ($request->hasFile('service_process_banner_5')) {
            $photo_upload     =  $request->service_process_banner_5;
            $photo_extension  =  $photo_upload-> getClientOriginalExtension();
            $photo_name       =  $last_inserted_id . "." . $photo_extension;
            Image::make($photo_upload)->resize(445,280)->save(base_path('public/uploads/service_items/service_process_5/'.$photo_name),100);
            Services::find($last_inserted_id)->update([
            'service_process_banner_5'          => $photo_name,
          ]);
          }

          Alert::toast('New Service Page Added Seccuessfully','success');

          return back();

        }



// END
}
