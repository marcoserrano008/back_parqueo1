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
        Schema::table('Clientes', function (Blueprint $table) {
            $table->foreign(['id_rol'], 'fk_cliente_rol')->references(['id_rol'])->on('Roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_usuario'], 'fk_cliente_usuario')->references(['id_usuario'])->on('Usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Clientes', function (Blueprint $table) {
            $table->dropForeign('fk_cliente_rol');
            $table->dropForeign('fk_cliente_usuario');
        });
    }
};
