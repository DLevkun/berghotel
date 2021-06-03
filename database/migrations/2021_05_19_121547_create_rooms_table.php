<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('guests');
            $table->float('area', 6, 2);
            $table->double('price', 6, 2);
            $table->string('image');
            $table->string('bed_size');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
