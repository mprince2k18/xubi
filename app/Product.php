<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Product extends Model
{

  use Searchable;

    protected $fillable = [
      'product_name',
      'product_photo',
      'slug_name',
    ];
}
