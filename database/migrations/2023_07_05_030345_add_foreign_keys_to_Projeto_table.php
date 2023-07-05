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
        Schema::table('Projeto', function (Blueprint $table) {
            $table->foreign(['fkCpf'], 'Projeto_ibfk_1')->references(['IdeCpf'])->on('Pesquisador')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Projeto', function (Blueprint $table) {
            $table->dropForeign('Projeto_ibfk_1');
        });
    }
};
