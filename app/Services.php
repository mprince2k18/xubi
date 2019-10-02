<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
      'title',
      'sub_title',
      'watermark',
    ];


    function relationBetweenServices()
    {
      return $this->hasOne('App\Category','id','service_category_id');
    }


}
