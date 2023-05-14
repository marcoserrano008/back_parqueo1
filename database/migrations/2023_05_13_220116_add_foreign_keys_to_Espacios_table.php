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
        Schema::table('Espacios', function (Blueprint $table) {
            $table->foreign(['bloque'], 'fk_espacio_bloque')->references(['id_bloque'])->on('Bloques')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Espacios', function (Blueprint $table) {
            $table->dropForeign('fk_espacio_bloque');
        });
    }
};
