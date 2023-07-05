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
        Schema::table('Estudo', function (Blueprint $table) {
            $table->foreign(['fkProjeto'], 'Estudo_ibfk_1')->references(['IdeProjeto'])->on('Projeto')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Estudo', function (Blueprint $table) {
            $table->dropForeign('Estudo_ibfk_1');
        });
    }
};
