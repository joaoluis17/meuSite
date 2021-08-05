<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolumesTable extends Migration
{

    public function up()
    {
        Schema::create('volumes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('numero');
            $table->integer('album_id');
            $table->foreign('album_id')->references('id')->on('albuns');
        });
    }


    public function down()
    {
        Schema::dropIfExists('volumes');
    }
}
