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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('solicitantes_id')->references('id')->on('solicitantes');
            $table->date('fecha_solicitud');
            $table->date('fecha_salida');
            $table->date('fecha_devolucion')->nullable();
            $table->string('ubicacion_prestamo');
            //$table->foreignId('tecnicos_id')->references('id')->on('tecnicos');
            $table->string('motivo');
            $table->string('observacion')->nullable();
            $table->string('motivo_des')->nullable();
            $table->boolean('disponible')->default(true);
            $table->string('fecha_dev')->nullable();
            $table->integer('estatus');

            $table->foreignId('users_id')->references('id')->on('users');

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
        Schema::dropIfExists('prestamos');
    }
};
