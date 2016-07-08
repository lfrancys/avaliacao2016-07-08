<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('sqlite')->create('produto', function (Blueprint $table) {
            $table->bigIncrements('idProduto');

            $table->bigInteger('idCategoria');
            $table->foreign('idCategoria')->references('idCategoria')->on('categoria');

            $table->string('nomeProduto', 255);
            $table->float('precoProduto');
            $table->text('descricaoProduto');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('sqlite')->drop('produto');
    }
}
