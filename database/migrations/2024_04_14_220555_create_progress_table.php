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
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id'); // Clave foránea que referencia al usuario
            $table->unsignedBigInteger('nivel_id'); // Clave foránea que referencia al nivel
            $table->decimal('porcentaje_completado', 5, 2); // Porcentaje completado del nivel
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('user');
            $table->foreign('nivel_id')->references('id')->on('level');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progress');
    }
};
