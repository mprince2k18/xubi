<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('sub_title');
            $table->string('title_watermark_single');
            $table->string('product_category_id')->unique();
            $table->string('title_banner');
            $table->string('about_product_title');
            $table->longText('details_about_product');
            $table->string('product_process_banner')->nullable();
            $table->longText('product_process_details')->nullable();
            $table->string('product_process_items_1')->nullable();
            $table->string('product_process_items_2')->nullable();
            $table->string('product_process_items_3')->nullable();
            $table->string('product_process_1')->nullable();
            $table->longText('product_process_details_1')->nullable();
            $table->string('product_process_banner_1')->nullable();
            $table->string('product_process_2')->nullable();
            $table->longText('product_process_details_2')->nullable();
            $table->string('product_process_banner_2')->nullable();
            $table->string('product_process_3')->nullable();
            $table->longText('product_process_details_3')->nullable();
            $table->string('product_process_banner_3')->nullable();
            $table->string('product_process_4')->nullable();
            $table->longText('product_process_details_4')->nullable();
            $table->string('product_process_banner_4')->nullable();
            $table->string('product_process_5')->nullable();
            $table->longText('product_process_details_5')->nullable();
            $table->string('product_process_banner_5')->nullable();
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
        Schema::dropIfExists('product_pages');
    }
}
