<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('blog_category_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->string('slug');
            $table->string('title');
            $table->string('description');
            $table->string('image');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('blog_category_id')->references('id')->on('blog_categories');
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
        Schema::dropIfExists('blogs');
    }
}
