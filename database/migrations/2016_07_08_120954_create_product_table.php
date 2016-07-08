<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('productName', 255);
            $table->float('productPrice');
            $table->string('productPicture', 255);

            $table->bigInteger('categoryId');
            $table->foreign('categoryId')->references('id')->on('category');

            $table->text('productDescription');
            $table->primary('id');
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
        Schema::drop('product');
    }
}
