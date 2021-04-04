<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('genre_id');
            $table->string('title');
            $table->text('body');
            $table->text('article_rating');
            $table->text('r_image_url_a')->nullable();
            $table->text('r_image_url_b')->nullable();
            $table->text('r_image_url_c')->nullable();
            $table->text('r_name');
            $table->text('r_caption');
            $table->text('r_item_url');
            $table->text('r_price');
            $table->text('r_shop');
            $table->text('r_code');
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('articles');
    }
}
