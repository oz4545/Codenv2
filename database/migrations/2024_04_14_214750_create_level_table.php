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
        Schema::create('level', function (Blueprint $table) {
            $table->id();
        $table->string('nombre');
        $table->text('contenido');
        $table->unsignedBigInteger('areas_id'); // Clave foránea que referencia al área
        $table->boolean('completado')->default(false);
        $table->timestamps();

        $table->foreign('areas_id')->references('id')->on('areas');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('level');
    }
};
