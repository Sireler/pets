<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetCatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_catches', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('pet_id');
            $table->foreign('pet_id')->references('id')->on('pets');

            $table->string('receipt_act_number', 255);
            $table->date('act_date');
            $table->string('district');
            $table->string('catch_act_number', 255);
            $table->string('catch_address', 255);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet_catches');
    }
}
