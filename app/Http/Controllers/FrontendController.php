<?php

namespace App\Http\Controllers;

use Laravel\Scout\Searchable;

use Illuminate\Http\Request;
use App\Banner;
use App\Info;
use App\Ceo;
use App\Team;
use App\Portfolio;
use App\Client;
use Alert;

class FrontendController extends Controller
{

  use Searchable;

    public function index()
    {
      $banners = Banner::latest()->paginate(5);
      $infos   = Info::all();
      $ceos    = Ceo::all();
      $teams    = Team::all();
      $portfolios  = Portfolio::all();
      $clients  = Client::all();
      // Alert::success('Success Title', 'Success Message');
      return view('homepage.index',compact('banners','infos','ceos','teams','portfolios','clients'));
    }

// END
}
