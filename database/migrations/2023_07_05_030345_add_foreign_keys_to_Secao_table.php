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
        Schema::table('Secao', function (Blueprint $table) {
            $table->foreign(['FkInstituicaoCustodiadora'], 'Secao_ibfk_1')->references(['IdeInstituicaoCustodiadora'])->on('InstituicaoCustodiadora')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Secao', function (Blueprint $table) {
            $table->dropForeign('Secao_ibfk_1');
        });
    }
};
