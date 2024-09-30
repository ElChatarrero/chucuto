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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->integer('disponible')->default('1');
            $table->string('N_bien');
            $table->string('observacion')->nullable();
            $table->string('nombre');
            $table->foreignId('condiciones_id')->references('id')->on('condiciones');
            $table->foreignId('categoria_id')->references('id')->on('categorias');
            $table->foreignId('modelos_id')->references('id')->on('modelos');
            $table->foreignId('marca_id')->references('id')->on('marcas');
            $table->boolean('estatus')->default(true);
            $table->string('placa');
            $table->string('serial');
            $table->string('color');
            $table->string('trasmicion');
            $table->string('tipo de vehiculo');
            $table->integer('año del vehiculo');
            $table->string('modo de adquisicion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
