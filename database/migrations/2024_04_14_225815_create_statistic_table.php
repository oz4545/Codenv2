<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('statistic', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id'); // Clave foránea que referencia al usuario
            $table->integer('dificultades_completadas');
            $table->integer('areas_completadas');
            $table->integer('puntaje_total'); // Clave foránea que referencia al puntaje
            $table->integer('posicion_global');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('user');
            $table->foreign('puntaje_total')->references('puntaje')->on('score');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistic');
    }
};
