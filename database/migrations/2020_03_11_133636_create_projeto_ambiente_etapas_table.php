<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetoAmbienteEtapasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projeto_ambiente_etapas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('projeto_ambiente_id');
            $table->unsignedBigInteger('responsavel_id')->nullable();
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->integer('sequencia')->default(1);
            $table->date('inicio_em')->nullable();
            $table->date('termino_em')->nullable();
            $table->timestamps();

            // Foreign
            $table->foreign('projeto_ambiente_id')->references('id')->on('projeto_ambientes')->onDelete('cascade');
            $table->foreign('responsavel_id')->references('id')->on('responsaveis')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projeto_ambiente_etapas');
    }
}
