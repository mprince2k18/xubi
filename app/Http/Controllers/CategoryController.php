<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;
use Alert;

class CategoryController extends Controller
{
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
}
