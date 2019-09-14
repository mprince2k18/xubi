<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ceo extends Model
{
  protected $fillable = [
    'ceo_message',
    'ceo_position',
    'ceo_photo',
];

}
