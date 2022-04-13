<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('slug')->nullable();
            $table->string('address')->nullable();
            $table->string('event_type_id')->nullable();
            $table->string('event_topic_id')->nullable();
            $table->date('date')->nullable();
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->longText('description_ar')->nullable();
            $table->integer('aspect_attendance')->nullable();
            $table->integer('aspect_male')->nullable();
            $table->integer('aspect_female')->nullable();
            $table->integer('basic_price')->nullable();
            $table->integer('standard_price')->nullable();
            $table->integer('premium_price')->nullable();
            $table->integer('is_published')->default(0);
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('events');
    }
}
