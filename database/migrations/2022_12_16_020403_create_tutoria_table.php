<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutoria', function (Blueprint $table) {
            $table->id();
            $table->foreignId('docente_id')->references('docente_id')->on('docente_tutor_asignacion');
            $table->foreignId('asignacion_tutor_id')->references('id')->on('docente_tutor_asignacion');
            $table->foreignId('motivo_id')->references('id')->on('motivo_tutoria');
            $table->string('tema');
            $table->string('lugar');
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_cierre');
            $table->integer('cantidad_estudiantes');
            $table->integer('limite_estudiantes');
            $table->foreignId('asignacion_id')->references('asignacion_id')->on('docente_tutor_asignacion');
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
        Schema::dropIfExists('tutoria');
    }
};
