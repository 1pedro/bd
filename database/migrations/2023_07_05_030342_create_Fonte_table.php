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
        Schema::create('Fonte', function (Blueprint $table) {
            $table->integer('IdeFonte')->primary();
            $table->string('NomTitulo', 155)->nullable();
            $table->string('NomInstituicaoProdutora', 155)->nullable();
            $table->string('IdcEspecie', 100)->nullable();
            $table->string('DscDescricao', 150)->nullable();
            $table->string('link', 155)->nullable();
            $table->date('DatDataCronologica');
            $table->date('DatDataProducao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Fonte');
    }
};
