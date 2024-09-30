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
        Schema::create('organismos', function (Blueprint $table) {
            $table->id();
            $table->string('siglas');
            $table->string('codigosigecof');
            $table->string('rif');
            $table->string('razonsocial');
            $table->string('telefono');
            $table->string('direccionweb');
            $table->string('correoelectronico');
            $table->date('fechagaceta');
            $table->string('numerogaceta');
            $table->string('status');
            $table->string('codigo_sudebip');
            $table->string('ciudad_actas');
            $table->integer('sede_principal_id');
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
        Schema::dropIfExists('organismos');
    }
};
