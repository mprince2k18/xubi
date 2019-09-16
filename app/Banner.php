<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;


class Banner extends Model
{
  use SoftDeletes;
  use Searchable;
  

  protected $fillable = [
    'header_headline',
    'header_message',
    'header_banner',
];
protected $dates=['deleted_at'];
}
