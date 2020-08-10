<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppoimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appoiments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string("name", 255)->nullable();
            $table->bigInteger('appoiments_type_id')->unsigned();
            $table->foreign('appoiments_type_id')->references('id')->on('appoiment_types');
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
        Schema::dropIfExists('appoiments');
    }
}
