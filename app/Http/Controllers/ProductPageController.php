<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductPage;
use App\CompanyService;
use App\Category;
use App\Services;
use Carbon\Carbon;
use Image;
use Alert;

class ProductPageController extends Controller
{


    function create(Request $request)
    {

      $request->validate([
        'title'                     => 'required',
        'sub_title'                 => 'required',
        'title_watermark_single'    => 'required|max:1|min:1',
        'product_category_id'       => 'required',
        'title_banner'              => 'required',
      ]);


      $last_inserted_id = ProductPage::insertGetId([
        'title'                       =>$request->title,
        'sub_title'                   =>$request->sub_title,
        'title_watermark_single'      =>$request->title_watermark_single,
        'product_category_id'         =>$request->product_category_id,
        'title_banner'                =>$request->title_banner,
        'about_product_title'         =>$request->about_product_title,
        'details_about_product'       =>$request->details_about_product,
        'product_process_banner'      =>$request->product_process_banner,
        'product_process_details'     =>$request->product_process_details,
        'product_process_items_1'     =>$request->product_process_items_1,
        'product_process_items_2'     =>$request->product_process_items_2,
        'product_process_items_3'     =>$request->product_process_items_3,
        'product_process_1'           =>$request->product_process_1,
        'product_process_details_1'   =>$request->product_process_details_1,
        'product_process_banner_1'    =>$request->product_process_banner_1,
        'product_process_2'           =>$request->product_process_2,
        'product_process_details_2'   =>$request->product_process_details_2,
        'product_process_banner_2'    =>$request->product_process_banner_2,
        'product_process_3'           =>$request->product_process_3,
        'product_process_details_3'   =>$request->product_process_details_3,
        'product_process_banner_3'    =>$request->product_process_banner_3,
        'product_process_4'           =>$request->product_process_4,
        'product_process_details_4'   =>$request->product_process_details_4,
        'product_process_banner_4'    =>$request->product_process_banner_4,
        'product_process_5'           =>$request->product_process_5,
        'product_process_details_5'   =>$request->product_process_details_5,
        'product_process_banner_5'    =>$request->product_process_banner_5,

      ]);


      // title_banner

      if ($request->hasFile('title_banner')) {
        $photo_upload     =  $request->title_banner;
        $photo_extension  =  $photo_upload-> getClientOriginalExtension();
        $photo_name       =  $last_inserted_id . "." . $photo_extension;
        Image::make($photo_upload)->resize(725,350)->save(base_path('public/uploads/product_items/'.$photo_name),100);
        ProductPage::find($last_inserted_id)->update([
        'title_banner'          => $photo_name,
      ]);
      }


      // product_info

      if ($request->hasFile('product_process_banner')) {
        $photo_upload     =  $request->product_process_banner;
        $photo_extension  =  $photo_upload-> getClientOriginalExtension();
        $photo_name       =  $last_inserted_id . "." . $photo_extension;
        Image::make($photo_upload)->resize(725,350)->save(base_path('public/uploads/product_items/product_info'.$photo_name),100);
        ProductPage::find($last_inserted_id)->update([
        'product_process_banner'          => $photo_name,
      ]);
      }


      // product_process_banner_1

      if ($request->hasFile('product_process_banner_1')) {
        $photo_upload     =  $request->product_process_banner_1;
        $photo_extension  =  $photo_upload-> getClientOriginalExtension();
        $photo_name       =  $last_inserted_id . "." . $photo_extension;
        Image::make($photo_upload)->resize(725,350)->save(base_path('public/uploads/product_items/product_process_1'.$photo_name),100);
        ProductPage::find($last_inserted_id)->update([
        'product_process_banner_1'          => $photo_name,
      ]);
      }


      // product_process_banner_2

      if ($request->hasFile('product_process_banner_2')) {
        $photo_upload     =  $request->product_process_banner_2;
        $photo_extension  =  $photo_upload-> getClientOriginalExtension();
        $photo_name       =  $last_inserted_id . "." . $photo_extension;
        Image::make($photo_upload)->resize(725,350)->save(base_path('public/uploads/product_items/product_process_2'.$photo_name),100);
        ProductPage::find($last_inserted_id)->update([
        'product_process_banner_2'          => $photo_name,
      ]);
      }


      // product_process_banner_3

      if ($request->hasFile('product_process_banner_3')) {
        $photo_upload     =  $request->product_process_banner_3;
        $photo_extension  =  $photo_upload-> getClientOriginalExtension();
        $photo_name       =  $last_inserted_id . "." . $photo_extension;
        Image::make($photo_upload)->resize(725,350)->save(base_path('public/uploads/product_items/product_process_3'.$photo_name),100);
        ProductPage::find($last_inserted_id)->update([
        'product_process_banner_3'          => $photo_name,
      ]);
      }


      // product_process_banner_4

      if ($request->hasFile('product_process_banner_4')) {
        $photo_upload     =  $request->product_process_banner_4;
        $photo_extension  =  $photo_upload-> getClientOriginalExtension();
        $photo_name       =  $last_inserted_id . "." . $photo_extension;
        Image::make($photo_upload)->resize(725,350)->save(base_path('public/uploads/product_items/product_process_4'.$photo_name),100);
        ProductPage::find($last_inserted_id)->update([
        'product_process_banner_4'          => $photo_name,
      ]);
      }

      // product_process_banner_5

      if ($request->hasFile('product_process_banner_5')) {
        $photo_upload     =  $request->product_process_banner_5;
        $photo_extension  =  $photo_upload-> getClientOriginalExtension();
        $photo_name       =  $last_inserted_id . "." . $photo_extension;
        Image::make($photo_upload)->resize(725,350)->save(base_path('public/uploads/product_items/product_process_5'.$photo_name),100);
        ProductPage::find($last_inserted_id)->update([
        'product_process_banner_5'          => $photo_name,
      ]);
      }


      Alert::toast('New Product Page Added Seccuessfully','success');

      return back();
    }

// END

}
