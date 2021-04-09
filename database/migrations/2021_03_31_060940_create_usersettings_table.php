<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersettings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->unsigned()->nullable();
            $table->string('mode')->nullable();
            $table->integer('entrymin')->unsigned()->nullable();
            $table->integer('entrymedium')->unsigned()->nullable();
            $table->integer('entrymax')->unsigned()->nullable();
            $table->integer('firstprofit')->unsigned()->nullable();
            $table->integer('secondprofit')->unsigned()->nullable();
            $table->integer('thirdprofit')->unsigned()->nullable();
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
        Schema::dropIfExists('usersettings');
    }
}
