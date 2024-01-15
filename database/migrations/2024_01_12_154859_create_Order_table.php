<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderTable extends Migration {

	public function up()
	{
		Schema::create('Order', function(Blueprint $table) {
			$table->increments('IdOrder');
			$table->timestamps();
			$table->integer('IdUser')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Order');
	}
}