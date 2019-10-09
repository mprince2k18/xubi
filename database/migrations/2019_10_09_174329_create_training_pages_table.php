<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('thumbnail');
            $table->longText('course_description');

            $table->string('what_u_will_learn_1')->nullable();
            $table->string('what_u_will_learn_2')->nullable();
            $table->string('what_u_will_learn_3')->nullable();
            $table->string('what_u_will_learn_4')->nullable();
            $table->string('what_u_will_learn_5')->nullable();
            $table->string('what_u_will_learn_6')->nullable();
            $table->string('what_u_will_learn_7')->nullable();
            $table->string('what_u_will_learn_8')->nullable();
            $table->string('what_u_will_learn_9')->nullable();
            $table->string('what_u_will_learn_10')->nullable();

            $table->string('requirements_1')->nullable();
            $table->string('requirements_2')->nullable();
            $table->string('requirements_3')->nullable();
            $table->string('requirements_4')->nullable();
            $table->string('requirements_5')->nullable();
            $table->string('requirements_6')->nullable();

            $table->string('course_lecture_title_1')->nullable();
            $table->string('lecture_title_1')->nullable();
            $table->string('lecture_title_2')->nullable();
            $table->string('lecture_title_3')->nullable();
            $table->string('lecture_title_4')->nullable();
            $table->string('lecture_title_5')->nullable();

            $table->string('course_lecture_title_2')->nullable();
            $table->string('lecture_title_6')->nullable();
            $table->string('lecture_title_7')->nullable();
            $table->string('lecture_title_8')->nullable();
            $table->string('lecture_title_9')->nullable();
            $table->string('lecture_title_10')->nullable();

            $table->string('resources_1')->nullable();
            $table->string('resources_2')->nullable();
            $table->string('resources_3')->nullable();
            $table->string('resources_4')->nullable();
            $table->string('resources_5')->nullable();
            $table->string('resources_6')->nullable();

            $table->string('course_features_1')->nullable();
            $table->string('course_features_2')->nullable();
            $table->string('course_features_3')->nullable();
            $table->string('course_features_4')->nullable();
            $table->string('course_features_5')->nullable();

            $table->string('course_features_1_item')->nullable();
            $table->string('course_features_2_item')->nullable();
            $table->string('course_features_3_item')->nullable();
            $table->string('course_features_4_item')->nullable();
            $table->string('course_features_5_item')->nullable();

            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training_pages');
    }
}
