<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetoAmbientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projeto_ambientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('projeto_id');
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->timestamps();

            // Foreign keys
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
        Schema::dropIfExists('projeto_ambientes');
    }
}
