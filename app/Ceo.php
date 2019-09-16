<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Ceo extends Model
{
  
  use Searchable;

  protected $fillable = [
    'ceo_message',
    'ceo_position',
    'ceo_photo',
];

}
