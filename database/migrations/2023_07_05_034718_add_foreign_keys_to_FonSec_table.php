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
        Schema::table('FonSec', function (Blueprint $table) {
            $table->foreign(['FkFonte'], 'FonSec_ibfk_1')->references(['IdeFonte'])->on('Fonte')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['FkSecao'], 'FonSec_ibfk_2')->references(['IdeSecao'])->on('Secao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('FonSec', function (Blueprint $table) {
            $table->dropForeign('FonSec_ibfk_1');
            $table->dropForeign('FonSec_ibfk_2');
        });
    }
};
