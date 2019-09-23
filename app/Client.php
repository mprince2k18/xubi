<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable=[
      'client_name',
      'client_description',
      'client_photo',
    ];
}
