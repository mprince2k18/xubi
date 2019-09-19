<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Portfolio extends Model
{
  use Searchable;


  protected $fillable = [
    'portfolio_name',
    'portfolio_category',
    'portfolio_image',
  ];



  function relationBetweenCategory()
  {
    return $this->hasOne('App\Category','id','portfolio_category_id');
                          // Model , Category id , portfolio field
  }



}
