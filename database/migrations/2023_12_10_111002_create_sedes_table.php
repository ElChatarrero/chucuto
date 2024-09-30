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
        Schema::create('sedes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tiposede_id')->references('id')->on('tiposedes');
            $table->string('descripcion');
            $table->string('localizacion');
            $table->string('pais');
            $table->string('otropais');
            $table->integer('estado_id');
            $table->integer('municipio_id');
            $table->integer('parroquia_id');
            $table->string('otraciudad');
            $table->string('urbanizacion');
            $table->string('calleavenida');
            $table->string('casaedificio');
            $table->string('piso');
            $table->string('status_sede');
            $table->string('ciudad');
            $table->string('otrasede');
            $table->string('sector_id');
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
        Schema::dropIfExists('sedes');
    }
};
