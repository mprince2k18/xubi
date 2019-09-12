<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Info;

class FrontendController extends Controller
{
    public function index()
    {
      $banners = Banner::all();
      $infos   = Info::all();
      return view('homepage.index',compact('banners','infos'));
    }
}
