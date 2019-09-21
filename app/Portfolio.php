<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Portfolio extends Model
{
  use Searchable;
  use SoftDeletes;


  protected $fillable = [
    'portfolio_name',
    'portfolio_category',
    'portfolio_image',
  ];

  protected $dates=['deleted_at'];

  function relationBetweenCategory()
  {
    return $this->hasOne('App\Category','id','portfolio_category_id');
                          // Model , Category id , portfolio field
  }



}
