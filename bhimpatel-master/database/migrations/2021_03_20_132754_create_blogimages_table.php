<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogimages', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default('no_image.jpg');
            $table->boolean('is_featured')->nullable()->deafult(false);
            $table->boolean('show')->deafult(false);
            $table->integer('order')->nullable()->deafult(0);
            $table->foreignId('blog_id')->constrained('blogs');
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
        Schema::dropIfExists('blogimages');
    }
}
