<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCafesTable extends Migration
{

    public function up()
    {
        Schema::create('cafes', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nome', 100);
            $table->longText('descricao');
        });
    }


    public function down()
    {
        Schema::dropIfExists('cafes');
    }
}
