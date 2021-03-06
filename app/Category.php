<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Category extends Model
{

  use Searchable;

  protected $fillable = [
    'service_category_name',
  ];



  function relationBetweenServices()
  {
    return $this->hasOne('App\Services','service_category_id','id');
  }

}
