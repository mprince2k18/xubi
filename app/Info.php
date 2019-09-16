<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;


class Info extends Model
{
     use SoftDeletes;
     use Searchable;


     protected $fillable = [
        'Info_headline',
        'Info_message',
        'Info_banner',
    ];

    protected $dates=['deleted_at'];
}
