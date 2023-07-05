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
        Schema::table('EstFon', function (Blueprint $table) {
            $table->foreign(['fkEstudo'], 'EstFon_ibfk_1')->references(['IdeEstudo'])->on('Estudo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['fkFonte'], 'EstFon_ibfk_2')->references(['IdeFonte'])->on('Fonte')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('EstFon', function (Blueprint $table) {
            $table->dropForeign('EstFon_ibfk_1');
            $table->dropForeign('EstFon_ibfk_2');
        });
    }
};
