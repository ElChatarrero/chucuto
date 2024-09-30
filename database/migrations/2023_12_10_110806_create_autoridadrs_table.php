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
        Schema::create('autoridadrs', function (Blueprint $table) {
            $table->id();
            $table->integer('cedula');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->foreignId('cargo_id')->references('id')->on('cargos');
            $table->string('correoelectronico');
            $table->integer('numerogaceta');
            $table->date('fechagaceta');
            $table->integer('numeroresolucion');
            $table->date('fecharesolucion');
            $table->boolean('tipo');
            $table->boolean('status')->default(true);
            $table->date('fecha_fin');
            $table->foreignId('organismo_id')->references('id')->on('organismos');
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
        Schema::dropIfExists('autoridadrs');
    }
};
