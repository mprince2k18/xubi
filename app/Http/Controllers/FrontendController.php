<?php

namespace App\Http\Controllers;

use Laravel\Scout\Searchable;

use Illuminate\Http\Request;
use App\Banner;
use App\Info;
use App\Ceo;
use App\Team;
use Alert;

class FrontendController extends Controller
{

  use Searchable;

    public function index()
    {
      $banners = Banner::all();
      $infos   = Info::all();
      $ceos    = Ceo::all();
      $teams    = Team::all();
      // Alert::success('Success Title', 'Success Message');
      return view('homepage.index',compact('banners','infos','ceos','teams'));
    }
}
