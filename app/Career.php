<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable=[
      'post_name',
      'schedule',
      'salary_range',
      'educational_background',
    ];
}
