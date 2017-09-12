<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('work_tag_id')->unsigned()->index();
            $table->string('image');
            $table->string('title_en');
            $table->string('title_az');
            $table->text('desc_en');
            $table->text('desc_az');
            $table->timestamps();

            $table->foreign('work_tag_id')->references('id')->on('work_tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
}
