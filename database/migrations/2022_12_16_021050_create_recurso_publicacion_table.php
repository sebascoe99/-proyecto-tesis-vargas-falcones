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
        Schema::create('recurso_publicacion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recurso_id')->references('id')->on('recurso');
            $table->foreignId('publicacion_id')->references('id')->on('publicaciones');
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
        Schema::dropIfExists('recurso_publicacion');
    }
};
