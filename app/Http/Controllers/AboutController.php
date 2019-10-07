<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class AboutController extends Controller
{
    function index()
    {
      $clients  = Client::all();
      return view('about.index',compact('clients'));
    }
}
