<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfitSellTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profitsell', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mode')->nullable();
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
        Schema::dropIfExists('profitsell');
    }
}
