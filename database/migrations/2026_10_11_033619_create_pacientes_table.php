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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('propietario_id')->constrained('propietarios')->onDelete('cascade');
            $table->string('codigo')->unique();
            $table->string('nombre');
            $table->string('especie'); 
            $table->string('raza')->nullable();
            $table->enum('sexo', ['macho', 'hembra']);
            $table->date('fecha_nacimiento')->nullable();
            $table->decimal('peso', 8, 2)->nullable();
            $table->text('observaciones')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
