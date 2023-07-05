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
        Schema::table('EstPes', function (Blueprint $table) {
            $table->foreign(['fkEstudo'], 'EstPes_ibfk_1')->references(['IdeEstudo'])->on('Estudo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('EstPes', function (Blueprint $table) {
            $table->dropForeign('EstPes_ibfk_1');
        });
    }
};
