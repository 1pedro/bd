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
        Schema::table('FonPub', function (Blueprint $table) {
            $table->foreign(['FkPublicacao'], 'FonPub_ibfk_1')->references(['IdePublicacao'])->on('Publicacao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['FkFonte'], 'FonPub_ibfk_2')->references(['IdeFonte'])->on('Fonte')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['FkEstudo'], 'FonPub_ibfk_3')->references(['IdeEstudo'])->on('Estudo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('FonPub', function (Blueprint $table) {
            $table->dropForeign('FonPub_ibfk_1');
            $table->dropForeign('FonPub_ibfk_2');
            $table->dropForeign('FonPub_ibfk_3');
        });
    }
};
