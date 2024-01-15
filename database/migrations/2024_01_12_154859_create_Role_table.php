<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoleTable extends Migration {

	public function up()
	{
		Schema::create('Role', function(Blueprint $table) {
			$table->increments('IdRole', true);
			$table->string('Libelle', 255);
			$table->string('Permissions', 255);
		});
	}

	public function down()
	{
		Schema::drop('Role');
	}
}