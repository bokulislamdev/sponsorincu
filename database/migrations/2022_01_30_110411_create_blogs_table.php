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
            $table->id();
            $table->string('title')->nullable();
            $table->string('title_ar')->nullable();
            $table->string('slug')->nullable();
            $table->tinyInteger('blog_category_id')->nullable();
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->longText('description_ar')->nullable();
            $table->tinyInteger('sell_post')->default(0);
            $table->tinyInteger('offer_post')->default(0);
            $table->integer('user_id')->nullable();
            $table->tinyInteger('status')->default(1);
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
