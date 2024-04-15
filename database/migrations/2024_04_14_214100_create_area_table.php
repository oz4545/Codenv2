<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('areas', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->unsignedBigInteger('dificulty_id'); // Clave foránea que referencia a la dificultad
        $table->boolean('completado')->default(false);
        $table->timestamps();

        $table->foreign('dificulty_id')->references('id')->on('dificulty');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};
