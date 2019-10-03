<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Scout\Searchable;
use Carbon\Carbon;
use App\Category;
use App\Product;
use Image;
use Alert;


class ProductController extends Controller
{

  use Searchable;

  public function products()
  {
      $company_products = Product::all();
      return view('products.products',compact('company_products'));
  }


  function add_product (Request $request)
  {

    $request->validate([
      'product_name'             => 'required',
      'product_photo'            => 'required',
      'slug_name'                => 'required',
    ]);

    $last_inserted_id =Product::insertGetId([
      'product_name'         =>$request->product_name,
      'product_photo'        =>$request->product_photo,
      'slug_name'            =>$request->slug_name,
      'created_at'           =>Carbon::now()
    ]);


    if ($request->hasFile('product_photo')) {
      $photo_upload     =  $request ->product_photo;
      $photo_extension  =  $photo_upload -> getClientOriginalExtension();
      $photo_name       =  $last_inserted_id . "." . $photo_extension;
      Image::make($photo_upload)->resize(800,600)->save(base_path('public/uploads/product/'.$photo_name),100);
      Product::find($last_inserted_id)->update([
      'product_photo'          => $photo_name,
    ]);
    }

    Alert::success('Added', 'Product Added Succesfully');

    return back()->with('success', 'Product Added Succesfully');
  }


  // edit_product
     function edit_product($product_id){

     $single_product_edit  =  Product::findOrFail($product_id);
     return view('dashboard.products.edit',compact('single_product_edit'));
   }


   public function index($products_id)
   {
      $products_single_index  =  Product::findOrFail($products_id);
      return view('products.index',compact('products_single_index'));

   }










  // END
}
