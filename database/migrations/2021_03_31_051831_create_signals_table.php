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
            $table->string('entrymin')->nullable();
            $table->string('entrymax')->nullable();
            $table->string('firstprofit')->nullable();
            $table->string('secondprofit')->nullable();
            $table->string('thirdprofit')->nullable();
            $table->string('lossprofit')->nullable();
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
