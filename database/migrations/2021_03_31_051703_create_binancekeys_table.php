<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinancekeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binancekeys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->unsigned()->nullable();
            $table->string('binanceapikey')->nullable();
            $table->string('binancesecretkey')->nullable();
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
        Schema::dropIfExists('binancekeys');
    }
}
