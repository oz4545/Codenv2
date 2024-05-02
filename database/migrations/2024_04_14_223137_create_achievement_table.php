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
        Schema::create('achievements', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('usuario_id'); // Clave foránea que referencia al usuario
        $table->string('descripcion');
        $table->dateTime('fecha_obtencion');
        $table->unsignedBigInteger('puntaje_id');
        $table->timestamps();

        $table->foreign('usuario_id')->references('id')->on('users');
        $table->foreign('puntaje_id')->references('id')->on('scores');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
