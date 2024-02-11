<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCartTable extends Migration {

	public function up()
	{
		Schema::create('Cart', function(Blueprint $table) {
			$table->increments('IdCart',true);
			$table->timestamps();
			$table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
		});
	}

	public function down()
	{
		Schema::drop('Cart');
	}
}
