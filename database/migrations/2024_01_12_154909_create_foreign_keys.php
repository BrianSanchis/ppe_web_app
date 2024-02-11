<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('User', function(Blueprint $table) {
			$table->foreign('IdRole')->references('IdRole')->on('Role')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Cart', function(Blueprint $table) {
			$table->foreign('id')->references('id')->on('user')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('CartLine', function(Blueprint $table) {
			$table->foreign('IdCart')->references('IdCart')->on('Cart')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('CartLine', function(Blueprint $table) {
			$table->foreign('IdProduct')->references('IdProduct')->on('Product')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Product', function(Blueprint $table) {
			$table->foreign('IdCat')->references('IdCat')->on('Category')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('User', function(Blueprint $table) {
			$table->dropForeign('User_IdRole_foreign');
		});
		Schema::table('Cart', function(Blueprint $table) {
			$table->dropForeign('Order_id_foreign');
		});
		Schema::table('CartLine', function(Blueprint $table) {
			$table->dropForeign('CartLine_IdOrder_foreign');
		});
		Schema::table('CartLine', function(Blueprint $table) {
			$table->dropForeign('CartLine_IdProduct_foreign');
		});
		Schema::table('Product', function(Blueprint $table) {
			$table->dropForeign('Product_IdCat_foreign');
		});
	}
}
