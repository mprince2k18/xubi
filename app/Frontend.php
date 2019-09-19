<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Frontend extends Model
{
  use Searchable;

  function relationBetweenCategory()
  {
    return $this->hasOne('App\Category','id','portfolio_category_id');
  }


}
