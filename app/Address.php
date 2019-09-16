<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Address extends Model
{

  use Searchable;

  protected $fillable = [
    'address',
    'phone',
    'mobile',
    'email1',
    'email2',
    'facebook',
    'twitter',
    'linkedin',
    'instagram',
    'youtube',
];
}
