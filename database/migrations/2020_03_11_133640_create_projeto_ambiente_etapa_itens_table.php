<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetoAmbienteEtapaItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projeto_ambiente_etapa_itens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('projeto_ambiente_etapa_id');
            $table->string('titulo');
            $table->text('descricao')->nullable();
            $table->date('concluido_em')->nullable();
            $table->timestamps();

            // Foreign
            $table->foreign('projeto_ambiente_etapa_id')->references('id')->on('projeto_ambiente_etapas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projeto_ambiente_etapa_itens');
    }
}
