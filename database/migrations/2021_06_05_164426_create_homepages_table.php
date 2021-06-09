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
            $table->text('itinerary1')->nullable();
            $table->text('itinerary2')->nullable();
            $table->text('itinerary3')->nullable();
            $table->text('itinerary4')->nullable();
            $table->text('itinerary5')->nullable();
            $table->text('itinerary6')->nullable();
            $table->text('background_img')->nullable();
            $table->string('promotional_message_h1')->nullable();
            $table->string('promotional_message')->nullable();
            $table->text('blog1')->nullable();
            $table->text('blog2')->nullable();
            $table->text('blog3')->nullable();
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

            '' => 'sometimes|mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi',
            '' => 'nullable',
            '' => 'nullable',
            '' => 'nullable',
            '' => 'nullable',
            'itinerary2' => 'nullable',
            'itinerary3' => 'nullable',
            'itinerary4' => 'nullable',
            'itinerary5' => 'nullable',
            'itinerary6' => 'nullable',            
            'background_img' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'promotional_message_h1' => 'nullable',
            'promotional_message' => 'nullable',
            'blog1' => 'nullable',
            'blog2' => 'nullable',
            'blog3' => 'nullable',
            'from_to' => 'nullable',
            'tour_itinerary' => 'nullable',
            'introduction' => 'nullable',
            'gallery_image_1' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'gallery_image_2' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'gallery_image_3' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'gallery_image_4' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'gallery_image_5' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'gallery_image_6' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'extra_image_1' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'extra_image_2' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'extra_image_3' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'extra_image_4' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'map_url' => 'nullable',
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
