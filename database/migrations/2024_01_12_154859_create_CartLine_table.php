<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCartLineTable extends Migration {

	public function up()
	{
		Schema::create('CartLine', function(Blueprint $table) {
			$table->bigInteger('Quantity');
			$table->integer('IdCart')->primary()->unsigned();
			$table->integer('IdProduct');
		});
	}

	public function down()
	{
		Schema::drop('CartLine');
	}
}
