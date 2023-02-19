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
        Schema::table('tbl_ms_preguntas_x_usuario', function (Blueprint $table) {
            $table->foreign(['COD_USUARIO'], 'FK_USUARIO_PREGUNTA_USER')->references(['COD_USUARIO'])->on('tbl_ms_usuario');
            $table->foreign(['COD_PREGUNTAS'], 'FK_PREGUNTAS')->references(['COD_PREGUNTA'])->on('tbl_ms_preguntas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_ms_preguntas_x_usuario', function (Blueprint $table) {
            $table->dropForeign('FK_USUARIO_PREGUNTA_USER');
            $table->dropForeign('FK_PREGUNTAS');
        });
    }
};
