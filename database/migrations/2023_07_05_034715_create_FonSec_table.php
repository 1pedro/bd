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
        Schema::create('FonSec', function (Blueprint $table) {
            $table->integer('FkFonte');
            $table->integer('FkSecao')->index('FkSecao');
            $table->string('CodCodigo', 100);

            $table->primary(['FkFonte', 'FkSecao']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FonSec');
    }
};
