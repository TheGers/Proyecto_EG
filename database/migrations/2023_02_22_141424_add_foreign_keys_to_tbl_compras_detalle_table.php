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
        Schema::table('tbl_compras_detalle', function (Blueprint $table) {
            $table->foreign(['cod_producto'], 'compras_detalle-producto')->references(['cod_producto'])->on('tbl_producto');
            $table->foreign(['cod_compra'], 'compras_detalle-compras')->references(['id'])->on('tbl_compras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_compras_detalle', function (Blueprint $table) {
            $table->dropForeign('compras_detalle-producto');
            $table->dropForeign('compras_detalle-compras');
        });
    }
};
