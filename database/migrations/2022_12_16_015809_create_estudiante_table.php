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
        Schema::create('estudiante', function (Blueprint $table) {
            $table->id();            
            $table->foreignId('persona_id')->references('id')->on('persona');
            $table->foreignId('carrera_id')->references('id')->on('carrera');
            $table->foreignId('semestre_id')->references('id')->on('semestre');
            $table->foreignId('periodo_lectivo_id')->references('id')->on('periodo_lectivo');
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
        Schema::dropIfExists('estudiante');
    }
};
