<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppoimentPetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appoiment_pets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('appoiment_id')->unsigned();
            $table->integer('pet_id')->unsigned();
            $table->dateTime('hour');
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
        Schema::dropIfExists('appoiment_pets');
    }
}
