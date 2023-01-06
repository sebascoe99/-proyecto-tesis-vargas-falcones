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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persona_id')->references('id')->on('persona');
            $table->string('nombre_usuario');
            $table->string('correo');
            $table->string('contrasenia');
            $table->foreignId('estado_id')->references('id')->on('estado');
            $table->foreignId('rol_id')->references('id')->on('rol');
            $table->string('ruta_imagen');
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
        Schema::dropIfExists('usuario');
    }
};
