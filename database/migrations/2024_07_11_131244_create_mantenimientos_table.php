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
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->integer('disponible')->default('1');
            $table->string('N_bien');
            $table->string('observacion')->nullable();
            $table->foreignId('tipo_mantenimiento_id')->references('id')->on('tipos_mantenimientos');
            $table->foreignId('taller_id')->references('id')->on('tallers');
            $table->foreignId('categoria_id')->references('id')->on('categorias');
            $table->foreignId('modelos_id')->references('id')->on('modelos');
            $table->foreignId('marca_id')->references('id')->on('marcas');
            $table->boolean('estatus')->default(true);
            $table->string('placa');
            $table->string('serial');
            $table->string('color');
            $table->string('trasmicion');
            $table->string('tipo_de_vehiculo');
            $table->integer('año_del_vehiculo');
            $table->string('motivo_de_mantenimiento');
            $table->string('taller_asignado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mantenimientos');
    }
};
