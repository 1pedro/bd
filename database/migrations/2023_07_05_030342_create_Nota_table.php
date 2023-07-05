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
        Schema::create('Nota', function (Blueprint $table) {
            $table->increments('IdeNota');
            $table->string('NomEntrada', 50)->nullable();
            $table->string('NomEntradaPadrao', 55)->nullable();
            $table->string('TxtAscepcao')->nullable();
            $table->string('DscClassificacao', 50)->nullable();
            $table->char('NotaIdc', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Nota');
    }
};
