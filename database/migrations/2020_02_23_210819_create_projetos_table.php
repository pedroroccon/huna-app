<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('cliente_id');
          $table->string('nome');
          $table->decimal('orcamento');
          $table->DateTime('dt_contrato')->nullable();
          $table->DateTime('dt_inicio')->nullable();
          $table->DateTime('dt_fim')->nullable();
          $table->DateTime('dt_prev_entrega')->nullable();
          $table->timestamps();

          $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetos');
    }
}
