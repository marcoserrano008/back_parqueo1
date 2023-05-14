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
        Schema::create('Reservas', function (Blueprint $table) {
            $table->integer('id_reserva')->primary();
            $table->string('id_espacio', 15)->nullable()->index('fk_id_espacio_idx');
            $table->string('id_vehiculo', 20)->nullable()->index('fk_id_vehiculo_idx');
            $table->date('fecha_reservada')->nullable();
            $table->time('hora_reservada')->nullable();
            $table->date('fecha_creacion')->nullable();
            $table->time('hora_creacion')->nullable();
            $table->integer('duracion_horas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Reservas');
    }
};
