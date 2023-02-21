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
        Schema::table('tbl_ms_permiso', function (Blueprint $table) {
            $table->foreign(['COD_ROL'], 'FK_ROL_PERMISO')->references(['COD_ROLES'])->on('tbl_ms_roles');
            $table->foreign(['COD_OBJETO'], 'FK_OBJETOS_PERMISO')->references(['COD_OBJETOS'])->on('tbl_ms_objetos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_ms_permiso', function (Blueprint $table) {
            $table->dropForeign('FK_ROL_PERMISO');
            $table->dropForeign('FK_OBJETOS_PERMISO');
        });
    }
};
