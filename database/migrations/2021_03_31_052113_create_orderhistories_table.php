<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderhistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderhistories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->unsigned()->nullable();
            $table->string('mark')->nullable();
            $table->string('side')->nullable();
            $table->dateTime('ordertime');
            $table->float('price')->unsigned()->nullable();
            $table->float('amount')->unsigned()->nullable();
            $table->float('total')->unsigned()->nullable();
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
        Schema::dropIfExists('orderhistories');
    }
}
