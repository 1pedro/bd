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
        Schema::create('FonTra', function (Blueprint $table) {
            $table->integer('FkTranscricao');
            $table->integer('FkFonte')->index('FkFonte');
            $table->char('fkCpf', 11);
            $table->integer('fkEstudo')->index('fkEstudo');

            $table->primary(['FkTranscricao', 'FkFonte', 'fkCpf', 'fkEstudo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FonTra');
    }
};
