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
        Schema::create('FonPub', function (Blueprint $table) {
            $table->integer('FkPublicacao');
            $table->integer('FkFonte')->index('FkFonte');
            $table->char('FkCpf', 11);
            $table->integer('FkEstudo')->index('FkEstudo');

            $table->primary(['FkPublicacao', 'FkFonte', 'FkCpf', 'FkEstudo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FonPub');
    }
};
