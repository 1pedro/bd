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
        Schema::create('FonNot', function (Blueprint $table) {
            $table->integer('FkNota');
            $table->integer('FkFonte')->index('FkFonte');
            $table->char('FkCpf', 11);
            $table->integer('FkEstudo')->index('FkEstudo');

            $table->primary(['FkNota', 'FkFonte', 'FkCpf', 'FkEstudo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FonNot');
    }
};
