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
        Schema::create('Variante', function (Blueprint $table) {
            $table->string('IdeVariante', 55);
            $table->string('NomVariante', 100);
            $table->integer('FkNota')->index('FkNota');

            $table->primary(['NomVariante', 'FkNota']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Variante');
    }
};
