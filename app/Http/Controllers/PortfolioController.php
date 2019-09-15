<?php

namespace App\Http\Controllers;

use Laravel\Scout\Searchable;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{


  use Searchable;
  
    function index()
    {
      echo "string";
    }
}
