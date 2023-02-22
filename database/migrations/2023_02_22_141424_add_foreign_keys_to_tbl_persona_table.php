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
        Schema::table('tbl_persona', function (Blueprint $table) {
            $table->foreign(['cod_telefono'], 'persona_telefono')->references(['id'])->on('tbl_telefono')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['cod_tipo_relacion'], 'persona_tipo_relacion')->references(['id'])->on('tbl_tipo_relacion');
            $table->foreign(['cod_direccion'], 'persona_direccion')->references(['id'])->on('tbl_direccion')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['cod_tipo_identificacion'], 'persona_tipo_identificacion')->references(['id'])->on('tbl_tipo_identificacion');
            $table->foreign(['cod_tipo_persona'], 'persona-tipo_persona')->references(['id'])->on('tbl_tipo_persona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_persona', function (Blueprint $table) {
            $table->dropForeign('persona_telefono');
            $table->dropForeign('persona_tipo_relacion');
            $table->dropForeign('persona_direccion');
            $table->dropForeign('persona_tipo_identificacion');
            $table->dropForeign('persona-tipo_persona');
        });
    }
};
