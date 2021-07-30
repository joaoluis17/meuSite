<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaixasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faixas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('numero');
            $table->integer('volume_id');
            $table->foreign('volume_id')->references('id')->on('volumes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faixas');
    }
}
