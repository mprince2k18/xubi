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
    'link1_button',
    'link1',
    'link2_button',
    'link2',
];
protected $dates=['deleted_at'];
}
