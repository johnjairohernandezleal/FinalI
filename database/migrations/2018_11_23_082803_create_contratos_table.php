<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContratosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numerocontrato');
            $table->string('horascontratadas');
            $table->date('fechainicio');
            $table->date('fechafin');
            $table->integer('docente_id')->unsigned();
            $table->integer('tipocontrato_id')->unsigned();
            $table->integer('jornada_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('docente_id')->references('id')->on('docentes');
            $table->foreign('tipocontrato_id')->references('id')->on('tipo_contratos');
            $table->foreign('jornada_id')->references('id')->on('jornadas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contratos');
    }
}
