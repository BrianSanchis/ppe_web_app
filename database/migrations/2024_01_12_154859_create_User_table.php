<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	public function up()
	{
		Schema::create('User', function(Blueprint $table) {
			$table->increments('IdUser', true);
			$table->timestamps();
			$table->string('Name', 255);
			$table->string('FirstName', 255);
			$table->string('Mail', 100);
			$table->integer('PhoneNumber');
			$table->string('Password', 255);
			$table->string('Adress', 255);
			$table->string('Country', 255);
			$table->integer('IdRole')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('User');
	}
}