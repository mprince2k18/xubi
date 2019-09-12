<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
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
