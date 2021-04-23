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
            $table->float('entrymin')->unsigned()->nullable();
            $table->float('entrymedium')->unsigned()->nullable();
            $table->float('entrymax')->unsigned()->nullable();
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
