<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seip extends Model
{
    protected $fillable=[

          'name',
          'email',
          'phone',
          'university',
          'nid',
          'rocket_number',
          'educational_qualification',
          'working_status',
          'have_seip',
    ];
}
