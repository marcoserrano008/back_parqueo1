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
        Schema::create('Vehiculos', function (Blueprint $table) {
            $table->string('id_vehiculo', 20)->primary();
            $table->integer('id_cliente')->nullable()->index('fk_id_cliente_idx');
            $table->string('marca', 45)->nullable();
            $table->string('color', 45)->nullable();
            $table->string('modelo', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Vehiculos');
    }
};
