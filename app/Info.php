<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Info extends Model
{
     use SoftDeletes;
  
     protected $fillable = [
        'Info_headline',
        'Info_message',
        'Info_banner',
    ];
    
    protected $dates=['deleted_at'];
}
