<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
  use SoftDeletes;
  
  protected $fillable = [
    'header_headline',
    'header_message',
    'header_banner',
];
protected $dates=['deleted_at'];
}
