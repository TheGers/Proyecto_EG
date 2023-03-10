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
        Schema::table('tbl_compras', function (Blueprint $table) {
            $table->foreign(['cod_proveedor'], 'compras-personas')->references(['id'])->on('tbl_persona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_compras', function (Blueprint $table) {
            $table->dropForeign('compras-personas');
        });
    }
};
