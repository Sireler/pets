<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWoolTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wool_types', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('pet_type_id');
            $table->foreign('pet_type_id')->references('id')->on('pet_types');

            $table->string('name', 255);

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
        Schema::dropIfExists('wool_types');
    }
}
