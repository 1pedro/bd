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
        Schema::create('AreEst', function (Blueprint $table) {
            $table->integer('FkEstudo')->unsigned();
            $table->integer('FkArea')->unsigned()->index('FkArea');
            $table->char('IdcAreEst', 1);

            $table->primary(['FkEstudo', 'FkArea']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AreEst');
    }
};
