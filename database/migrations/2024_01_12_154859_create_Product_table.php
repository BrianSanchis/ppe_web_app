<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductTable extends Migration {

	public function up()
	{
		Schema::create('Product', function(Blueprint $table) {
			$table->increments('IdProduct');
			$table->string('Libelle', 255);
			$table->float('Price');
			$table->string('Description', 255);
			$table->integer('Stock');
			$table->float('Dosage');
			$table->integer('IdCat')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Product');
	}
}