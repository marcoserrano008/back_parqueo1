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
        Schema::create('SalidasParqueo', function (Blueprint $table) {
            $table->integer('id_salida')->primary();
            $table->string('id_vehiculo', 45)->nullable()->index('fk_id_vehiculo_idx');
            $table->time('hora_salida')->nullable();
            $table->date('fecha_salida')->nullable();
            $table->integer('id_ingreso')->nullable()->index('fk_id_salida_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SalidasParqueo');
    }
};
