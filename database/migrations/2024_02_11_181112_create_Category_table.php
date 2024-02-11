<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryTable extends Migration {

	public function up()
	{
		Schema::create('Category', function(Blueprint $table) {
			$table->increments('IdCat');
			$table->string('Libelle', 255);
		});
	}

	public function down()
	{
		Schema::drop('Category');
	}
}