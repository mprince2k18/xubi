<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\CompanyService;
use App\Product;

class SearchController extends Controller
{
  public function search(Request $request)
  {
    if($request->has('search')){
      // $users = User::search($request->get('search'))->get();
      $company_services = CompanyService::search($request->get('search'))->get();
      $company_products = Product::search($request->get('search'))->get();
    }else{
      // $users = User::get();
      $company_services = CompanyService::get();
      $company_products = Product::get();

    }
      return view('search.index', compact('company_services','company_products'));


  }
}
