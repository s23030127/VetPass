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
        Schema::create('tratamientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('consulta_id')->constrained('consultas')->onDelete('cascade');
            $table->foreignId('medicamento_id')->constrained('medicamentos')->onDelete('cascade');
            $table->string('dosis');
            $table->string('frecuencia');
            $table->date('fecha_inicio');
            $table->date('fecha_fin')->nullable();
            $table->text('indicaciones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tratamientos');
    }
};
