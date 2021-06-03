<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('descrip');
            $table->double('price', 6, 2);
            $table->integer('duration');
            $table->integer('spec_duration');
            $table->string('date');
            $table->string('image');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
