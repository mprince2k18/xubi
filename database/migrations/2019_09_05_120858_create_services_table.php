<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            // title
            $table->string('title');
            $table->string('sub_title');
            $table->string('title_watermark_single');
            // service_category
            $table->string('service_category_id');
            // service_category end
            $table->string('title_banner')->nullable();
            $table->string('title_watermark_full')->nullable();
            // title end

            // about_service
            $table->string('about_service_title');
            $table->string('details_about_service');
            // about service end

            // // service_info_1
            $table->string('service_info_banner');
            $table->string('service_info_details');
            $table->string('service_info_items_1')->nullable();
            $table->string('service_info_items_2')->nullable();
            $table->string('service_info_items_3')->nullable();
            // // service_info_1_end
            //
            // // service_process_1
            $table->string('service_process_1')->nullable();
            $table->string('service_process_details_1')->nullable();
            $table->string('service_process_banner_1')->nullable();
            //
            // // service_process_2
            $table->string('service_process_2')->nullable();
            $table->string('service_process_details_2')->nullable();
            $table->string('service_process_banner_2')->nullable();
            //
            // // service_process_3
            $table->string('service_process_3')->nullable();
            $table->string('service_process_details_3')->nullable();
            $table->string('service_process_banner_3')->nullable();
            //
            // // service_process_4
            $table->string('service_process_4')->nullable();
            $table->string('service_process_details_4')->nullable();
            $table->string('service_process_banner_4')->nullable();

            // // service_process_5
            $table->string('service_process_5')->nullable();
            $table->string('service_process_details_5')->nullable();
            $table->string('service_process_banner_5')->nullable();


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
        Schema::dropIfExists('services');
    }
}
