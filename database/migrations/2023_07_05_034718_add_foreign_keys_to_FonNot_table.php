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
        Schema::table('FonNot', function (Blueprint $table) {
            $table->foreign(['FkNota'], 'FonNot_ibfk_1')->references(['IdeNota'])->on('Nota')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['FkFonte'], 'FonNot_ibfk_2')->references(['IdeFonte'])->on('Fonte')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['FkEstudo'], 'FonNot_ibfk_3')->references(['IdeEstudo'])->on('Estudo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('FonNot', function (Blueprint $table) {
            $table->dropForeign('FonNot_ibfk_1');
            $table->dropForeign('FonNot_ibfk_2');
            $table->dropForeign('FonNot_ibfk_3');
        });
    }
};
