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
        Schema::create('Pesquisador', function (Blueprint $table) {
            $table->char('IdeCpf', 11)->primary();
            $table->string('NomNome', 55)->nullable();
            $table->string('NomOrcid', 55)->nullable();
            $table->string('NomLattes', 55)->nullable();
            $table->char('IdcTitulacao', 1)->nullable();
            $table->char('CodInstitucional', 8)->nullable();
            $table->string('NomInstituicao', 150)->nullable();
            $table->char('IdcPesquisador', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pesquisador');
    }
};
