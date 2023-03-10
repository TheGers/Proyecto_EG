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
        Schema::create('tbl_ms_preguntas_x_usuario', function (Blueprint $table) {
            $table->comment('');
            $table->integer('COD_PREGUNTAS')->index('FK_PREGUNTAS_idx');
            $table->integer('COD_USUARIO')->index('FK_USUARIO_PREGUNTA_USER_idx');
            $table->string('RESPUESTA', 50)->nullable();
            $table->string('CREADO_POR', 45)->nullable();
            $table->dateTime('FECHA_CREACION')->nullable();
            $table->string('MODIFICADO_POR', 45)->nullable();
            $table->dateTime('FECHA_MODIFICACION')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_ms_preguntas_x_usuario');
    }
};
