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
        Schema::create('tbl_regimen_control_facturacion', function (Blueprint $table) {
            $table->comment('');
            $table->integer('cod_empresa')->primary();
            $table->integer('correlativo');
            $table->integer('lote');
            $table->integer('tipo_recibo')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_limite')->nullable();
            $table->string('rango_desde', 50)->nullable();
            $table->string('rango_hasta', 50)->nullable();
            $table->string('cai', 50)->nullable();
            $table->string('punto_emision', 3);
            $table->string('establecimiento', 3);
            $table->string('tipo_documento', 2);
            $table->string('secuencia_regimen', 50)->nullable();
            $table->date('fecha_venta')->nullable();
            $table->integer('cod_venta')->nullable();
            $table->string('estado_venta', 50)->nullable();
            $table->date('fecha_anulacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_regimen_control_facturacion');
    }
};
