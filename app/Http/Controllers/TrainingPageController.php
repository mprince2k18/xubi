<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use App\TrainingPage;
use Image;
use Alert;
use Carbon\Carbon;

class TrainingPageController extends Controller
{

  // training_page
  public function training_page()
  {
    $trainings = Training::all();
    return view('dashboard.training.add_training_page',compact('trainings'));
  }

  // training_page_create
  public function create(Request $request)
  {
    $last_inserted_id =TrainingPage::insertGetId([
      'title'         =>$request->title,
      'thumbnail'  =>$request->thumbnail,
      'course_description'   =>$request->course_description,

      'what_u_will_learn_1'=>$request->what_u_will_learn_1,
      'what_u_will_learn_2'=>$request->what_u_will_learn_2,
      'what_u_will_learn_3'=>$request->what_u_will_learn_3,
      'what_u_will_learn_4'=>$request->what_u_will_learn_4,
      'what_u_will_learn_5'=>$request->what_u_will_learn_5,
      'what_u_will_learn_6'=>$request->what_u_will_learn_6,
      'what_u_will_learn_7'=>$request->what_u_will_learn_7,
      'what_u_will_learn_8'=>$request->what_u_will_learn_8,
      'what_u_will_learn_9'=>$request->what_u_will_learn_9,
      'what_u_will_learn_10'=>$request->what_u_will_learn_10,

      'requirements_1'=>$request->requirements_1,
      'requirements_2'=>$request->requirements_2,
      'requirements_3'=>$request->requirements_3,
      'requirements_4'=>$request->requirements_4,
      'requirements_5'=>$request->requirements_5,
      'requirements_6'=>$request->requirements_6,

      'course_lecture_title_1'=>$request->course_lecture_title_1,
      'lecture_title_1'=>$request->lecture_title_1,
      'lecture_title_2'=>$request->lecture_title_2,
      'lecture_title_3'=>$request->lecture_title_3,
      'lecture_title_4'=>$request->lecture_title_4,
      'lecture_title_5'=>$request->lecture_title_5,
      'course_lecture_title_2'=>$request->course_lecture_title_2,
      'lecture_title_6'=>$request->lecture_title_6,
      'lecture_title_7'=>$request->lecture_title_7,
      'lecture_title_8'=>$request->lecture_title_8,
      'lecture_title_9'=>$request->lecture_title_9,
      'lecture_title_10'=>$request->lecture_title_10,



      'resources_1'=>$request->resources_1,
      'resources_2'=>$request->resources_2,
      'resources_3'=>$request->resources_3,
      'resources_4'=>$request->resources_4,
      'resources_5'=>$request->resources_5,
      'resources_6'=>$request->resources_6,



      'course_features_1'=>$request->course_features_1,
      'course_features_2'=>$request->course_features_2,
      'course_features_3'=>$request->course_features_3,
      'course_features_4'=>$request->course_features_4,
      'course_features_5'=>$request->course_features_5,
      'course_features_1_item'=>$request->course_features_1_item,
      'course_features_2_item'=>$request->course_features_2_item,
      'course_features_3_item'=>$request->course_features_3_item,
      'course_features_4_item'=>$request->course_features_4_item,
      'course_features_5_item'=>$request->course_features_5_item,

      'created_at'   =>Carbon::now()
    ]);

    if ($request->hasFile('thumbnail')) {
      $photo_upload     =  $request ->thumbnail;
      $photo_extension  =  $photo_upload -> getClientOriginalExtension();
      $photo_name       =  $last_inserted_id . "." . $photo_extension;
      Image::make($photo_upload)->resize(825,458)->save(base_path('public/uploads/training_page/'.$photo_name),100);
      TrainingPage::find($last_inserted_id)->update([
      'thumbnail'          => $photo_name,
    ]);
    }

    Alert::toast('Training Page Added Succesfully','success');

    return back();
  }

  // training_page_view
  public function training_page_view()
  {
    $all_training_pages = TrainingPage::latest()->paginate(10);
    return view('dashboard.training.training_page_view',compact('all_training_pages'));
  }



  // training_page_edit
  public function training_page_edit($trainingpage_id)
  {
    $trainings = Training::all();
    $single_training_page_info = TrainingPage::findOrFail($trainingpage_id);
    return view('dashboard.training.training_page_edit',compact('single_training_page_info','trainings'));
  }

  // training_page_update
  function training_page_update(Request $request)
  {

    // echo $request;
    // print_r($request->all());

    TrainingPage::find($request->trainingpage_id)->update([
      'title'         =>$request->title,
      'thumbnail'  =>$request->thumbnail,
      'course_description'   =>$request->course_description,

      'what_u_will_learn_1'=>$request->what_u_will_learn_1,
      'what_u_will_learn_2'=>$request->what_u_will_learn_2,
      'what_u_will_learn_3'=>$request->what_u_will_learn_3,
      'what_u_will_learn_4'=>$request->what_u_will_learn_4,
      'what_u_will_learn_5'=>$request->what_u_will_learn_5,
      'what_u_will_learn_6'=>$request->what_u_will_learn_6,
      'what_u_will_learn_7'=>$request->what_u_will_learn_7,
      'what_u_will_learn_8'=>$request->what_u_will_learn_8,
      'what_u_will_learn_9'=>$request->what_u_will_learn_9,
      'what_u_will_learn_10'=>$request->what_u_will_learn_10,

      'requirements_1'=>$request->requirements_1,
      'requirements_2'=>$request->requirements_2,
      'requirements_3'=>$request->requirements_3,
      'requirements_4'=>$request->requirements_4,
      'requirements_5'=>$request->requirements_5,
      'requirements_6'=>$request->requirements_6,

      'course_lecture_title_1'=>$request->course_lecture_title_1,
      'lecture_title_1'=>$request->lecture_title_1,
      'lecture_title_2'=>$request->lecture_title_2,
      'lecture_title_3'=>$request->lecture_title_3,
      'lecture_title_4'=>$request->lecture_title_4,
      'lecture_title_5'=>$request->lecture_title_5,
      'course_lecture_title_2'=>$request->course_lecture_title_2,
      'lecture_title_6'=>$request->lecture_title_6,
      'lecture_title_7'=>$request->lecture_title_7,
      'lecture_title_8'=>$request->lecture_title_8,
      'lecture_title_9'=>$request->lecture_title_9,
      'lecture_title_10'=>$request->lecture_title_10,



      'resources_1'=>$request->resources_1,
      'resources_2'=>$request->resources_2,
      'resources_3'=>$request->resources_3,
      'resources_4'=>$request->resources_4,
      'resources_5'=>$request->resources_5,
      'resources_6'=>$request->resources_6,



      'course_features_1'=>$request->course_features_1,
      'course_features_2'=>$request->course_features_2,
      'course_features_3'=>$request->course_features_3,
      'course_features_4'=>$request->course_features_4,
      'course_features_5'=>$request->course_features_5,
      'course_features_1_item'=>$request->course_features_1_item,
      'course_features_2_item'=>$request->course_features_2_item,
      'course_features_3_item'=>$request->course_features_3_item,
      'course_features_4_item'=>$request->course_features_4_item,
      'course_features_5_item'=>$request->course_features_5_item,

      'updated_at' => Carbon::now(),
    ]);

    Alert::toast('Updated Successfully','success');
    return back();

  }


  // END
}
