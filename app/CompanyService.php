<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyService extends Model
{

protected $fillable =[
  'service_name',
  'service_category_id',
  'service_photo',
];


function relationBetweenCategory()
{
  return $this->hasOne('App\Category','id','service_category_id');
                      // Category = id , CompanyService = field name
}

}
