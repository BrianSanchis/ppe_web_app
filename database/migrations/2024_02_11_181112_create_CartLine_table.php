<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCartLineTable extends Migration {

	public function up()
	{
		Schema::create('CartLine', function(Blueprint $table) {
			$table->increments('IdCartLine');
			$table->bigInteger('Quantity');
			$table->float('Price');
			$table->integer('IdCart')->unsigned();
			$table->integer('IdProduct')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('CartLine');
	}
}