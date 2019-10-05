<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPage extends Model
{
    protected $fillable = [
      'title',
      'sub_title',
      'title_watermark_single',
      'product_category_id',
      'title_banner',
      'about_product_title',
      'details_about_product',
      'product_process_banner',
      'product_process_details',
      'product_process_items_1',
      'product_process_items_2',
      'product_process_items_3',
      'product_process_1',
      'product_process_details_1',
      'product_process_banner_1',
      'product_process_2',
      'product_process_details_2',
      'product_process_banner_2',
      'product_process_3',
      'product_process_details_3',
      'product_process_banner_3',
      'product_process_4',
      'product_process_details_4',
      'product_process_banner_4',
      'product_process_5',
      'product_process_details_5',
      'product_process_banner_5',
    ];


    function relationBetweenProduct()
    {
      return $this->hasOne('App\Product','id','product_category_id');
    }


}
