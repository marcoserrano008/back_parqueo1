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
        Schema::create('IngresosParqueo', function (Blueprint $table) {
            $table->integer('id_ingreso')->primary();
            $table->string('id_vehiculo', 20)->nullable()->index('fk_id_vehiculo_idx');
            $table->time('hora_ingreso')->nullable();
            $table->date('fecha_ingreso')->nullable();
            $table->integer('id_guardia')->nullable()->index('kf_id_guardia_idx');
            $table->string('id_espacio', 15)->nullable()->index('fk_id_espacio_idx');
            $table->string('id_bloque', 15)->nullable()->index('fk_id_bloque_idx');
            $table->integer('id_reserva')->nullable()->index('fk_reserva_ingres_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('IngresosParqueo');
    }
};
