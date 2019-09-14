<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Info;
use Alert;

class FrontendController extends Controller
{
    public function index()
    {
      $banners = Banner::all();
      $infos   = Info::all();
      // Alert::success('Success Title', 'Success Message');
      return view('homepage.index',compact('banners','infos'));
    }
}
