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
        Schema::create('Secao', function (Blueprint $table) {
            $table->integer('IdeSecao')->primary();
            $table->string('NomSecao', 155)->nullable();
            $table->integer('FkInstituicaoCustodiadora')->index('FkInstituicaoCustodiadora');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Secao');
    }
};
