<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfitBuyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profitbuy', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mode')->nullable();
            $table->integer('entrymin')->unsigned()->nullable();
            $table->integer('entrymedium')->unsigned()->nullable();
            $table->integer('entrymax')->unsigned()->nullable();
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
        Schema::dropIfExists('profitbuy');
    }
}
