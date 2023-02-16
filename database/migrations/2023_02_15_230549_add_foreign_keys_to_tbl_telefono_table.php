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
        Schema::table('tbl_telefono', function (Blueprint $table) {
            $table->foreign(['cod_tipo_telefono'], 'telefono-tipo_telefono')->references(['cod_tipo_telefono'])->on('tbl_tipo_telefono');
            $table->foreign(['cod_persona'], 'fk_telefono_persona')->references(['cod_persona'])->on('tbl_persona')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_telefono', function (Blueprint $table) {
            $table->dropForeign('telefono-tipo_telefono');
            $table->dropForeign('fk_telefono_persona');
        });
    }
};
