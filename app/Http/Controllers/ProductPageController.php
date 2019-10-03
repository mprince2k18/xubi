<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductPage;

class ProductPageController extends Controller
{


    function create(Request $request)
    {
      ProductPage::insert([
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

    }


}
