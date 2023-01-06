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
        Schema::create('comunicacion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('docente_tutor_id')->references('id')->on('docente_tutor');
            $table->string('mensaje');
            $table->date('fecha');
            $table->string('nombre');
            $table->string('correo');
            $table->foreignId('estado_mensaje_id')->references('id')->on('estado');
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
        Schema::dropIfExists('comunicacion');
    }
};
