<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
  use SoftDeletes;

    protected $fillable=[
      'name',
      'designation',
      'team_photo',
    ];

    protected $dates=['deleted_at'];

}
