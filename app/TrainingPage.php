<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingPage extends Model
{

  protected $fillable=[
    'title',
    'thumbnail',
    'course_description',
    'what_u_will_learn_1',
    'what_u_will_learn_2',
    'what_u_will_learn_3',
    'what_u_will_learn_4',
    'what_u_will_learn_5',
    'what_u_will_learn_6',
    'what_u_will_learn_7',
    'what_u_will_learn_8',
    'what_u_will_learn_9',
    'what_u_will_learn_10',

    'requirements_1',
    'requirements_2',
    'requirements_3',
    'requirements_4',
    'requirements_5',
    'requirements_6',

    'course_lecture_title_1',
    'lecture_title_1',
    'lecture_title_2',
    'lecture_title_3',
    'lecture_title_4',
    'lecture_title_5',
    'course_lecture_title_2',
    'lecture_title_6',
    'lecture_title_7',
    'lecture_title_8',
    'lecture_title_9',
    'lecture_title_10',



    'resources_1',
    'resources_2',
    'resources_3',
    'resources_4',
    'resources_5',
    'resources_6',



    'course_features_1',
    'course_features_2',
    'course_features_3',
    'course_features_4',
    'course_features_5',
    'course_features_1_item',
    'course_features_2_item',
    'course_features_3_item',
    'course_features_4_item',
    'course_features_5_item',


  ];


  function relationshipBetweenTraining()
  {
    return $this->hasOne('App\Training','id','training_id');
  }

  // END
}
