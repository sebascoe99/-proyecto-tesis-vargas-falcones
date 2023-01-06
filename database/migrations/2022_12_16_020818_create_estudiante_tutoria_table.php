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
        Schema::create('estudiante_tutoria', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tutoria_id')->references('id')->on('tutoria');
            $table->foreignId('estudiante_id')->references('id')->on('estudiante');
            $table->integer('asistencia');
            $table->double('nota', 4, 2);
            $table->double('evaluacion', 4, 2);
            $table->string('recomendacion');
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
        Schema::dropIfExists('estudiante_tutoria');
    }
};
