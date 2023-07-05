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
        Schema::create('Transcricao', function (Blueprint $table) {
            $table->increments('IdeTranscricao');
            $table->string('TxtTranscricao', 1000)->nullable();
            $table->string('NomTipo', 50)->nullable();
            $table->integer('fkFonte')->unsigned()->index('fkFonte');
            $table->date('DatTranscricao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Transcricao');
    }
};
