<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCartTable extends Migration {

	public function up()
	{
		Schema::create('Cart', function(Blueprint $table) {
			$table->increments('IdCart');
			$table->timestamps();
			$table->integer('id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Cart');
	}
}
