<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsInfomationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_information', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->bigInteger('pets_id')->unsigned();
            $table->foreign('pets_id')->references('id')->on('pets');
            $table->string('age')->nullable();
            $table->string('race')->nullable();
            $table->string('productimg')->nullable();
            $table->timestamps();
        });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public
function down()
{
    Schema::dropIfExists('pets_infomation');
}
}
