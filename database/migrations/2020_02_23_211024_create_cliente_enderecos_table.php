<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_enderecos', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('cliente_id');
          $table->string('rua');
          $table->string('cep');
          $table->string('complemento')->nullable();
          $table->string('cidade');
          $table->string('bairro');
          $table->integer('numero');
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
        Schema::dropIfExists('cliente_enderecos');
    }
}
