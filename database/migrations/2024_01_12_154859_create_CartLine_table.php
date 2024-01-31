<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCartLineTable extends Migration {

	public function up()
	{
        Schema::create('CartLine', function(Blueprint $table) {
            $table->bigInteger('Quantity');
            $table->bigInteger('IdCart');
            $table->bigInteger('IdProduct');

            $table->primary(['IdCart', 'IdProduct']);

            $table->foreign('IdCart')->references('IdCart')->on('Cart');
            $table->foreign('IdProduct')->references('IdProduct')->on('Product');
        });
	}

	public function down()
	{
		Schema::drop('CartLine');
	}
}
