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

// relationBetweenEducation
    function relationBetweenEducation()
    {
      return $this->hasOne('App\EducationStatus','id','educational_qualification');
    }

// relationBetweenEducation
    function relationBetweenWork()
    {
      return $this->hasOne('App\WorkingStatus','id','working_status');
    }
// relationBetweenSeip
    function relationBetweenSeip()
    {
      return $this->hasOne('App\SeipStatus','id','have_seip');
    }
// relationBetweenRemarks
    function relationBetweenRemarks()
    {
      return $this->hasOne('App\RemarksStatus','id','remarks');
    }
// relationBetweenGender
    function relationBetweenGender()
    {
      return $this->hasOne('App\GenderStatus','id','gender');
    }
// relationBetweenInformationSource
    function relationBetweenInformationSource()
    {
      return $this->hasOne('App\InformationSource','id','information_source');
    }
// relationBetweenEducationStatus
    function relationBetweenEducationStatus()
    {
      return $this->hasOne('App\EducationStatus','id','educational_qualification');
    }
// relationBetweenSeipStatus
    function relationBetweenSeipStatus()
    {
      return $this->hasOne('App\SeipStatus','id','have_seip');
    }


}
