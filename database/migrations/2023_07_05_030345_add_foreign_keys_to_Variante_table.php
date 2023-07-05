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
        Schema::table('Variante', function (Blueprint $table) {
            $table->foreign(['FkNota'], 'Variante_ibfk_1')->references(['IdeNota'])->on('Nota')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Variante', function (Blueprint $table) {
            $table->dropForeign('Variante_ibfk_1');
        });
    }
};
