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
        Schema::create('TraCri', function (Blueprint $table) {
            $table->integer('FkCriterio')->unsigned();
            $table->integer('FkTranscricao')->unsigned()->index('FkTranscricao');

            $table->primary(['FkCriterio', 'FkTranscricao']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TraCri');
    }
};
