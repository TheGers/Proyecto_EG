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
        Schema::create('tbl_direccion', function (Blueprint $table) {
            $table->comment('');
            $table->integer('cod_direccion', true);
            $table->string('ciudad');
            $table->integer('calle');
            $table->string('casa', 45);
            $table->string('colonia');
            $table->string('avenida');
            $table->string('direccion1');
            $table->string('direccion2');
            $table->integer('cod_tipo_direccion')->index('direccion_tipo_direccion_idx');
            $table->string('CREADO_POR', 30);
            $table->dateTime('FECHA_CREACION');
            $table->string('MODIFICADO_POR', 45);
            $table->dateTime('FECHA_MODIFICACION');
            $table->integer('cod_persona')->nullable()->index('fk_direccion_persona_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_direccion');
    }
};
