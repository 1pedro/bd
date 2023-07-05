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
        Schema::table('FonTra', function (Blueprint $table) {
            $table->foreign(['FkTranscricao'], 'FonTra_ibfk_1')->references(['IdeTranscricao'])->on('Transcricao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['FkFonte'], 'FonTra_ibfk_2')->references(['IdeFonte'])->on('Fonte')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['fkEstudo'], 'FonTra_ibfk_3')->references(['IdeEstudo'])->on('Estudo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('FonTra', function (Blueprint $table) {
            $table->dropForeign('FonTra_ibfk_1');
            $table->dropForeign('FonTra_ibfk_2');
            $table->dropForeign('FonTra_ibfk_3');
        });
    }
};
