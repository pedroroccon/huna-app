<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtapasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etapas', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('ambiente_id');
          $table->unsignedBigInteger('responsavel_id');
          $table->unsignedBigInteger('etapa_tipo_id');
          $table->DateTime('dt_inicio')->nullable();
          $table->DateTime('dt_fim')->nullable();
          $table->timestamps();
          $table->foreign('ambiente_id')->references('id')->on('ambientes')->onDelete('cascade');
          $table->foreign('responsavel_id')->references('id')->on('responsavels')->onDelete('cascade');
          $table->foreign('etapa_tipo_id')->references('id')->on('etapas_tipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etapas');
    }
}
