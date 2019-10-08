<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Dashboard extends Model
{
  function relationBetweenCategory()
  {
    return $this->hasOne('App\Category','id','portfolio_category_id');
  }
}
