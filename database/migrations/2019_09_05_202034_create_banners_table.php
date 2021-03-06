<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('header_headline');
            $table->longText('header_message')->nullable();
            $table->string('header_banner')->default('default.png');
            $table->longText('link1_button')->nullable();
            $table->longText('link1')->nullable();
            $table->longText('link2_button')->nullable();
            $table->longText('link2')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('banners');
    }
}
