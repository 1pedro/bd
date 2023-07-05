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
        Schema::table('Transcricao', function (Blueprint $table) {
            $table->foreign(['fkFonte'], 'Transcricao_ibfk_1')->references(['IdeFonte'])->on('Fonte')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Transcricao', function (Blueprint $table) {
            $table->dropForeign('Transcricao_ibfk_1');
        });
    }
};
