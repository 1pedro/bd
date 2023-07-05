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
        Schema::create('Publicacao', function (Blueprint $table) {
            $table->integer('IdePublicacao')->primary();
            $table->string('NomTitulo', 155)->nullable();
            $table->string('NomReferencia', 150)->nullable();
            $table->char('IdcVeiculo', 4)->nullable();
            $table->date('DatPublicacao')->nullable();
            $table->string('CodDoi', 55)->nullable();
            $table->string('NomLink', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Publicacao');
    }
};
