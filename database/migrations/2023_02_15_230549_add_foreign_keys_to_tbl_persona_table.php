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
            $table->foreign(['tbl_persona_cod_persona1', 'tbl_persona_tbl_persona_cod_persona'], 'fk_tbl_persona_tbl_persona2')->references(['cod_persona', 'tbl_persona_cod_persona'])->on('tbl_persona')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['cod_tipo_persona'], 'persona-tipo_persona')->references(['cod_tipo_persona'])->on('tbl_tipo_persona');
            $table->foreign(['cod_tipo_relacion'], 'persona_tipo_relacion')->references(['cod_tipo_relacion'])->on('tbl_tipo_relacion');
            $table->foreign(['tbl_persona_cod_persona'], 'fk_tbl_persona_tbl_persona1')->references(['cod_persona'])->on('tbl_persona')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['cod_tipo_identificacion'], 'persona_tipo_identificacion')->references(['cod_tipo_identificacion'])->on('tbl_tipo_identificacion');
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
            $table->dropForeign('fk_tbl_persona_tbl_persona2');
            $table->dropForeign('persona-tipo_persona');
            $table->dropForeign('persona_tipo_relacion');
            $table->dropForeign('fk_tbl_persona_tbl_persona1');
            $table->dropForeign('persona_tipo_identificacion');
        });
    }
};
