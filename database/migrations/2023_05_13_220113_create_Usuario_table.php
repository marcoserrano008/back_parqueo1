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
        Schema::create('Usuario', function (Blueprint $table) {
            $table->integer('id_usuario');
            $table->string('nombres', 45)->nullable();
            $table->string('a_paterno', 45)->nullable();
            $table->string('a_materno', 45)->nullable();
            $table->dateTime('fecha_nac')->nullable();
            $table->integer('nro_celular')->nullable();
            $table->string('ci', 15);

            $table->primary(['id_usuario', 'ci']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Usuario');
    }
};
