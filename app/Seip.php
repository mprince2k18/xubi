<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Seip extends Model
{
    protected $fillable=[

      'trainee_id',
      'quarter_id',
      'name',
      'email',
      'phone',
      'university',
      'nid',
      'gender',
      'information_source',
      'rocket_number',
      'educational_qualification',
      'working_status',
      'father_name',
      'father_occupation',
      'mother_name',
      'mother_occupation',
      'alt_phone',
      'siblings',
      'have_seip',
      'remarks',
      'commented_by',
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
// relationBetweenFatherWorkingStatus
    function relationBetweenFatherWorkingStatus()
    {
      return $this->hasOne('App\FatherWorkingStatus','id','father_occupation');
    }
// relationBetweenMotherWorkingStatus
    function relationBetweenMotherWorkingStatus()
    {
      return $this->hasOne('App\MotherWorkingStatus','id','mother_occupation');
    }


}
