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
        Schema::create('Estudo', function (Blueprint $table) {
            $table->increments('IdeEstudo');
            $table->string('NomNome', 155)->nullable();
            $table->string('DscJustificativa', 155)->nullable();
            $table->string('DscObjetivo', 155)->nullable();
            $table->integer('fkProjeto')->unsigned()->index('fkProjeto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Estudo');
    }
};
