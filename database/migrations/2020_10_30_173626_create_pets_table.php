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
            $table->string('name', 255);
            $table->text('description'); // Описание
            $table->string('type', 64); // Порода
            $table->string('breed_name', 255);
            $table->string('color', 64);
            $table->date('date_of_birth');
            $table->string('sex', 2);
            $table->date('date_arrived'); // Дата прибытия в приют
            $table->date('date_adopted'); // Дата выдачи из приюта
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
        Schema::dropIfExists('pets');
    }
}
