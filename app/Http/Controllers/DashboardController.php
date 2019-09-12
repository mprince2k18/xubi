<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Contact;
use Carbon\Carbon;
use Image;

class DashboardController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    function index()
    {
      return view('dashboard.index');
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





}
