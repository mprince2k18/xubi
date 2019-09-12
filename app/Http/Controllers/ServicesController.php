<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services()
    {
        return view('services.services');
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
