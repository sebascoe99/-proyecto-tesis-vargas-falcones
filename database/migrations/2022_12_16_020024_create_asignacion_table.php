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
        Schema::create('asignacion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('facultad_id')->references('id')->on('facultad');
            $table->foreignId('carrera_id')->references('id')->on('carrera');
            $table->foreignId('semestre_id')->references('id')->on('semestre');
            $table->foreignId('asignatura_id')->references('id')->on('asignatura');
            $table->foreignId('estado_id')->references('id')->on('estado');
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
        Schema::dropIfExists('asignacion');
    }
};
