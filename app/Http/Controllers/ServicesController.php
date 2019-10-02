<?php

namespace App\Http\Controllers;


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
          return view('services.index',compact('single_service_info'));
        }

        // single_service_index
        function create(Request $request)
        {

          $request->validate([
            'title'                     => 'required',
            'sub_title'                 => 'required',
            'title_watermark_single'    => 'required|max:1|min:1',
            'service_category_id'       => 'required',
            'title_banner'              => 'required',
          ]);

          Services::insert([
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

//
// title
// sub_title
// title_watermark_single
// service_category_id
//
// title_banner
// title_watermark_full
// about_service_title
// details_about_service
// service_info_banner
// service_info_details
// service_info_items_1
// service_info_items_2
// service_info_items_3
// service_process_1
// service_process_details_1
// service_process_banner_1
// service_process_2
// service_process_details_2
// service_process_banner_2
// service_process_3
// service_process_details_3
// service_process_banner_3
// service_process_4
// service_process_details_4
// service_process_banner_4
// service_process_5
// service_process_details_5
// service_process_banner_5

          Alert::toast('Service Added Seccuessfully','success');

          return back();

        }



// END
}
