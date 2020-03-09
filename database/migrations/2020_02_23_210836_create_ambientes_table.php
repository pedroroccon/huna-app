<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambientes', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('ambientes_tipo_id');
          $table->unsignedBigInteger('projeto_id');
          $table->string('nome');
          $table->timestamps();
          $table->foreign('ambientes_tipo_id')->references('id')->on('ambientes_tipos')->onDelete('cascade');
          $table->foreign('projeto_id')->references('id')->on('projetos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ambientes');
    }
}
