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
        Schema::create('bien_prestamos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prestamo_id')->references('id')->on('prestamos');
            $table->foreignId('bienes_id')->references('id')->on('bienes');
            $table->boolean('status');

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
        Schema::dropIfExists('bien_prestamos');
    }
};
