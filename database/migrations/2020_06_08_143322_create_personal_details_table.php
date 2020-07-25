<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profile_id');
            $table->integer('age');
            $table->integer('height');
            $table->string('weight');
            $table->string('ethnicity');
            $table->string('hair_color');
            $table->string('hair_length');
            $table->string('breast_size');
            $table->string('breast_type');
            $table->string('smoker');
            $table->string('provides');
            $table->string('nationality');
            $table->string('travel');
            $table->string('languages');
            $table->string('orientation');
            $table->string('eye_color');
            $table->integer('is_pornstar')->default(false);
            $table->string('meeting_with');
            $table->string('web_site')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('viber')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('wechat')->nullable();
            $table->string('telegram')->nullable();
            $table->string('line')->nullable();


            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_details');
    }
}
