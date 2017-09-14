<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('meta_title_en');
            $table->string('meta_title_az');
            $table->text('meta_desc_en');
            $table->text('meta_desc_az');
            $table->string('address_en');
            $table->string('address_az');
            $table->string('lat');
            $table->string('lng');
            $table->string('email');
            $table->string('facebook_link');
            $table->string('twitter_link');
            $table->string('linkedin_link');
            $table->string('contact');
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
        Schema::dropIfExists('settings');
    }
}
