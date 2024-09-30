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
        Schema::create('responsables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('codigo_uniadmin_id')->nullable()->references('id')->on('codigo_uniadmins');
            $table->integer('cedula')->unique;
            $table->string('primernombre');
            $table->string('segundonombre')->nullable();
            $table->string('primerapellido');
            $table->string('segundoapellido')->nullable();
            $table->string('telefono');
            $table->string('correoelectronico');
            $table->foreignId('cargo_id')->nullable()->references('id')->on('cargos');
            $table->foreignId('organismo_id')->nullable()->references('id')->on('organismos');
            $table->boolean('tipo');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('responsables');
    }
};
