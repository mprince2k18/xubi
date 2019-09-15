<?php

namespace App\Http\Controllers;

use Laravel\Scout\Searchable;

use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;
use Alert;

class CategoryController extends Controller
{

  use Searchable;

  
  // BACKEND
  function add_service_category(Request $request)
  {

    $request->validate([
      'service_category_name'      => 'required',
    ]);

    Category::insert([
      'service_category_name' =>$request->service_category_name,
      'created_at'            =>Carbon::now()
    ]);

    Alert::success('Successfully', 'Service Category Added');

    return back()->with('success', 'Service Category Added');

  }


  // edit_service_category
     function edit_service_category($category_id){
     $single_category_edit  =  Category::findOrFail($category_id);
     return view('dashboard.services.catrgory_edit',compact('single_category_edit'));
   }


  // update_category
  function update_category(Request $request)
  {
    Category::find($request->category_id)->update([
      'service_category_name'         =>$request->service_category_name,
  ]);

  Alert::success('Category Editted Succesfully', 'Thank you');

  return redirect(route('service_index'))->with('success','Updated Successfully');

  }









  // END
}
