<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->string('tag_line');
            $table->string('sub_tag');
            $table->text('main_video')->nullable();
            $table->text('post_image')->nullable();
            $table->text('similar')->nullable();
            $table->integer('days')->nullable();
            $table->text('tagline')->nullable();
            $table->mediumText('description')->nullable();
            $table->mediumText('tips')->nullable();
            $table->text('from_to')->nullable();
            $table->mediumText('tour_itinerary')->nullable();
            $table->mediumText('introduction')->nullable();
            $table->text('gallery_image_1')->nullable();
            $table->text('gallery_image_2')->nullable();
            $table->text('gallery_image_3')->nullable();
            $table->text('gallery_image_4')->nullable();
            $table->text('gallery_image_5')->nullable();
            $table->text('gallery_image_6')->nullable();
            $table->text('extra_image_1')->nullable();
            $table->text('extra_image_2')->nullable();
            $table->text('extra_image_3')->nullable();
            $table->text('extra_image_4')->nullable();
            $table->text('map_url')->nullable();
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
        Schema::dropIfExists('homepages');
    }
}
