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
        Schema::table('tbl_venta_detalle', function (Blueprint $table) {
            $table->foreign(['cod_venta'], 'detalle_venta-ventas')->references(['id'])->on('tbl_ventas');
            $table->foreign(['cod_producto'], 'detalle_venta-producto')->references(['cod_producto'])->on('tbl_producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_venta_detalle', function (Blueprint $table) {
            $table->dropForeign('detalle_venta-ventas');
            $table->dropForeign('detalle_venta-producto');
        });
    }
};
