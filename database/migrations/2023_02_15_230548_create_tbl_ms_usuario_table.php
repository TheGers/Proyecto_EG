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
        Schema::create('tbl_ms_usuario', function (Blueprint $table) {
            $table->comment('');
            $table->integer('COD_USUARIO', true);
            $table->string('PREGUNTA', 35);
            $table->integer('COD_ROL')->index('FK_idx');
            $table->string('NOMBRE_USUARIO', 35)->nullable();
            $table->string('ESTADO_USUARIO', 45)->nullable();
            $table->string('CONTRASENA', 45)->nullable();
            $table->dateTime('FECHA_ULTIMA_CONEXION')->nullable();
            $table->string('PREGUNTA_CONTESTADA', 45)->nullable();
            $table->string('PRIMER_INGRESO', 45)->nullable();
            $table->dateTime('FECHA_VENCIMIENTO')->nullable();
            $table->string('CORREO_ELECTRONICO', 45)->nullable();
            $table->string('CREADO_POR', 45)->nullable();
            $table->dateTime('FECHA_CREACION')->nullable();
            $table->string('MODIFICADO_POR', 45)->nullable();
            $table->dateTime('FECHA_MODIFICACION')->nullable();

            $table->primary(['COD_USUARIO', 'PREGUNTA']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_ms_usuario');
    }
};
