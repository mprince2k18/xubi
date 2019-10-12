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
      'job_experience',
      'deadline',
      'job_description',
      'key_requirements',
      'required_skills',
    ];
}
