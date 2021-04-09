<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mark')->nullable();
            $table->string('mode')->nullable();
            $table->dateTime('receivetime');
            $table->float('entrymin')->unsigned()->nullable();
            $table->float('entrymax')->unsigned()->nullable();
            $table->float('firstprofit')->unsigned()->nullable();
            $table->float('secondprofit')->unsigned()->nullable();
            $table->float('thirdprofit')->unsigned()->nullable();
            $table->float('lossprofit')->unsigned()->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('signals');
    }
}
