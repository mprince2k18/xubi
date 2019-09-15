<?php

namespace App\Http\Controllers;

use Laravel\Scout\Searchable;

use Illuminate\Http\Request;
use App\CompanyService;
use App\Category;
use Carbon\Carbon;
use Image;
use Alert;

class ServicesController extends Controller
{

  use Searchable;
  
    public function services()
    {
        $company_all_services = CompanyService::all();
        $company_all_categories = Category::all();
        return view('services.services',compact('company_all_services','company_all_categories'));
    }


    public function custom_software()
    {
        return view('services.custom_software');
    }

    public function web_design_development()
    {
        return view('services.web_design_dev');
    }

     public function apps_development()
    {
        return view('services.apps_development');
    }

     public function graphics_solution()
    {
        return view('services.graphics_solution');
    }

    public function career_development()
    {
        return view('services.career_development');
    }

        public function domain_hosting()
    {
        return view('services.domain_hosting');
    }

        public function clipping_path_services()
    {
        return view('services.clipping_path_services');
    }
}
