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
        Schema::table('Precios', function (Blueprint $table) {
            $table->foreign(['id_rol'], 'fk_precio_rol')->references(['id_rol'])->on('Roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Precios', function (Blueprint $table) {
            $table->dropForeign('fk_precio_rol');
        });
    }
};
