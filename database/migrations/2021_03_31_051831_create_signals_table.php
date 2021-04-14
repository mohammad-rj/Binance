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
            $table->string('mark');
            $table->string('mode');
            $table->dateTime('receivetime');
            $table->string('entrymin');
            $table->string('entrymax');
            $table->string('firstprofit');
            $table->string('secondprofit');
            $table->string('thirdprofit');
            $table->string('lossprofit');
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
