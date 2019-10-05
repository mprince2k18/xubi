<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
      'title',
      'sub_title',
      'title_watermark_single',
      'service_category_id',
      'title_banner',
      'title_watermark_full',
      'about_service_title',
      'details_about_service',
      'service_info_banner',
      'service_info_details',
      'service_info_items_1',
      'service_info_items_2',
      'service_info_items_3',
      'service_process_1',
      'service_process_details_1',
      'service_process_banner_1',
      'service_process_2',
      'service_process_details_2',
      'service_process_banner_2',
      'service_process_3',
      'service_process_details_3',
      'service_process_banner_3',
      'service_process_4',
      'service_process_details_4',
      'service_process_banner_4',
      'service_process_5',
      'service_process_details_5',
      'service_process_banner_5',
    ];


    function relationBetweenServices()
    {
      return $this->hasOne('App\Category','id','service_category_id');
    }


}
