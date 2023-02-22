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
        Schema::table('tbl_inventario', function (Blueprint $table) {
            $table->foreign(['cod_producto'], 'inventario_producto')->references(['cod_producto'])->on('tbl_producto');
            $table->foreign(['cod_tipo_movimiento_invt'], 'inventario-tipo_move')->references(['cod_tipo_movimiento'])->on('tbl_tipo_movimiento');
            $table->foreign(['cod_venta'], 'inventario_ventas')->references(['id'])->on('tbl_ventas');
            $table->foreign(['cod_compra'], 'inventario-compras')->references(['id'])->on('tbl_compras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_inventario', function (Blueprint $table) {
            $table->dropForeign('inventario_producto');
            $table->dropForeign('inventario-tipo_move');
            $table->dropForeign('inventario_ventas');
            $table->dropForeign('inventario-compras');
        });
    }
};
