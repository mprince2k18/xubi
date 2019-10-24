<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('trainee_id')->unique();
            $table->string('quarter_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('university');
            $table->string('nid')->unique();
            $table->integer('gender');
            $table->integer('information_source');
            $table->string('rocket_number')->nullable();
            $table->integer('educational_qualification');
            $table->integer('working_status');
            $table->string('father_name');
            $table->integer('father_occupation');
            $table->string('mother_name');
            $table->integer('mother_occupation');
            $table->string('alt_phone');
            $table->string('siblings');
            $table->integer('have_seip');
            $table->integer('remarks')->default(1);
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
        Schema::dropIfExists('seips');
    }
}
