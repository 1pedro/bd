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
        Schema::create('Projeto', function (Blueprint $table) {
            $table->increments('IdeProjeto');
            $table->string('NomNome', 155)->nullable();
            $table->string('TxtDescricao')->nullable();
            $table->char('fkCpf', 11)->index('fkCpf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Projeto');
    }
};
