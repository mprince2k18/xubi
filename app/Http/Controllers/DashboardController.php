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
use App\Client;
use App\Training;
use App\Services;
use App\Portfolio;
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
      $banners = Banner::paginate(5);
      $contacts = Contact::paginate(5);
      $service_categories =Category::paginate(5);
      $company_services = CompanyService::paginate(5);
      $all_products = Product::paginate(5);
      $team_members = Team::paginate(5);
      $clients = Client::paginate(5);
      $trainings = Training::paginate(5);
      $services = Services::paginate(5);
      $portfolios = Services::paginate(5);
      return view('dashboard.index',compact('banners','contacts','service_categories','company_services','all_products','portfolios','team_members','clients','trainings','services'));
    }


    function header_slider()
    {
      $banners = Banner::paginate(7);
      $trashed_banners = Banner::onlyTrashed()->paginate(5);
      error_reporting(0);
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

    // add_service_page
    public function add_service_page()
    {
      $all_service_categories = Category::all();
      return view('dashboard.services.add_service_page',compact('all_service_categories'));
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
    // Client

    function client_index()
    {
      $all_clients = Client::latest()->paginate(5);
      return view('dashboard.clients.index',compact('all_clients'));
    }

    // Product page

    function add_product_page()
    {
      $all_product_categories = Product::all();
      return view('dashboard.products.add_product_page',compact('all_product_categories'));
    }

    // training page

    function training_index()
    {
      $trainings = Training::paginate(5);
      return view('dashboard.training.index',compact('trainings'));
    }

    // training page

    function career_index()
    {
      return view('dashboard.career.index');
    }



// END
}
