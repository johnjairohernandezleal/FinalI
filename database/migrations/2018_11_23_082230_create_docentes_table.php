<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocentesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('documento');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('telefono');
            $table->string('email');
            $table->integer('profesion_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('profesion_id')->references('id')->on('profesions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('docentes');
    }
}
