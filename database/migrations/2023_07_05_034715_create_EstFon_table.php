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
        Schema::create('EstFon', function (Blueprint $table) {
            $table->integer('fkEstudo')->unsigned();
            $table->integer('fkFonte')->unsigned()->index('fkFonte');
            $table->date('DtEstFon')->nullable();

            $table->primary(['fkEstudo', 'fkFonte']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('EstFon');
    }
};
