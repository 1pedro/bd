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
        Schema::table('TraCri', function (Blueprint $table) {
            $table->foreign(['FkCriterio'], 'TraCri_ibfk_1')->references(['IdeCriterio'])->on('Criterio')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['FkTranscricao'], 'TraCri_ibfk_2')->references(['IdeTranscricao'])->on('Transcricao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TraCri', function (Blueprint $table) {
            $table->dropForeign('TraCri_ibfk_1');
            $table->dropForeign('TraCri_ibfk_2');
        });
    }
};
