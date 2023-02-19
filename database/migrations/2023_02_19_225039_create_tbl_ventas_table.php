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
        Schema::create('tbl_ventas', function (Blueprint $table) {
            $table->comment('');
            $table->integer('cod_venta', true);
            $table->integer('cod_persona')->index('ventas_personas_idx');
            $table->integer('cod_tipo_movimiento')->index('ventas_tipo_mov_idx');
            $table->string('descripcion');
            $table->double('subtotal');
            $table->double('impuesto');
            $table->double('descuento');
            $table->double('total');
            $table->string('tipo_pago');
            $table->integer('num_comprobante')->nullable();
            $table->string('CREADO_POR', 30);
            $table->dateTime('FECHA_CREACION');
            $table->string('MODIFICADO_POR', 45);
            $table->dateTime('FECHA_MODIFICACION');
            $table->string('estado');
            $table->integer('cod_empresa')->index('fk_ventas_cai_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_ventas');
    }
};
