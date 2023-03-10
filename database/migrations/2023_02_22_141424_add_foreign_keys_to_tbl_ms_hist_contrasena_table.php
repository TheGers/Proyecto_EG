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
        Schema::table('tbl_ms_hist_contrasena', function (Blueprint $table) {
            $table->foreign(['COD_USUARIO'], 'FK_CONTRA_USER')->references(['COD_USUARIO'])->on('tbl_ms_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_ms_hist_contrasena', function (Blueprint $table) {
            $table->dropForeign('FK_CONTRA_USER');
        });
    }
};
