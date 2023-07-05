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
        Schema::table('AreEst', function (Blueprint $table) {
            $table->foreign(['FkEstudo'], 'AreEst_ibfk_1')->references(['IdeEstudo'])->on('Estudo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['FkArea'], 'AreEst_ibfk_2')->references(['IdeArea'])->on('Area')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('AreEst', function (Blueprint $table) {
            $table->dropForeign('AreEst_ibfk_1');
            $table->dropForeign('AreEst_ibfk_2');
        });
    }
};
