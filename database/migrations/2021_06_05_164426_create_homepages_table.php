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
            $table->text('video')->nullable();
            $table->string('tagline_bg');
            $table->string('tagline_sm');
            $table->string('link_redirect')->nullable();
            $table->integer('itinerary1')->nullable();
            $table->integer('itinerary2')->nullable();
            $table->integer('itinerary3')->nullable();
            $table->integer('itinerary4')->nullable();
            $table->integer('itinerary5')->nullable();
            $table->integer('itinerary6')->nullable();
            $table->integer('background_img')->nullable();
            $table->string('promotional_message_h1')->nullable();
            $table->string('promotional_message')->nullable();
            $table->text('blog1')->nullable();
            $table->text('blog2')->nullable();
            $table->text('blog3')->nullable();
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
