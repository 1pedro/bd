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
            $table->integer('FkPublicacao')->unsigned();
            $table->integer('FkFonte')->unsigned()->index('FkFonte');
            $table->char('FkCpf', 11);
            $table->integer('FkEstudo')->unsigned()->index('FkEstudo');

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
