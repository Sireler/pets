<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('card_number', 32);
            $table->string('type', 32);
            $table->string('date_of_birth', 16);
            $table->float('weight');
            $table->string('name', 64); // кличка
            $table->string('sex', 10);
            $table->string('breed_name', 64);
            $table->string('color', 64);
            $table->string('fur', 64);
            $table->string('ears', 20);
            $table->string('tail', 20);
            $table->string('size', 20);
            $table->string('special_signs', 255);
            $table->integer('enclosure_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
