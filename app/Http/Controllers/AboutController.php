<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Team;

class AboutController extends Controller
{
    function index()
    {
      $clients  = Client::all();
      $teams    = Team::all();
      return view('about.index',compact('clients','teams'));
    }
}
