<?php

namespace App\Http\Controllers;

use Laravel\Scout\Searchable;

use Illuminate\Http\Request;
use App\Banner;
use App\Contact;
use App\Category;
use App\CompanyService;
use App\Product;
use App\Team;
use Carbon\Carbon;
use Image;
use Alert;

class DashboardController extends Controller
{

  use Searchable;

  public function __construct()
  {
      $this->middleware('auth');
  }

    function index()
    {
      return view('dashboard.index',compact('messages'));
    }


    function header_slider()
    {
      $banners = Banner::paginate(7);
      $trashed_banners = Banner::onlyTrashed()->paginate(5);
      return view('dashboard.header.index',compact('banners','trashed_banners'));
    }


function contact_notification(){

  $all_notis = Contact::all();
  return view('dashboard.app',compact('all_notis'));
}

// SERVICES

function service_index()
{
  $service_categories = Category::all();
  $company_services = CompanyService::all();
  return view('dashboard.services.index',compact('service_categories','company_services'));
}


// PRODUCTS

function products_index()
{
  $all_products = Product::all();
  return view('dashboard.products.index',compact('all_products'));
}


// TEAM

function team_index()
{
  $team_members = Team::latest()->paginate(3);
  return view('dashboard.team.index',compact('team_members'));
}



// END
}
