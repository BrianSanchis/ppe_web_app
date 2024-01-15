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
		Schema::table('Order', function(Blueprint $table) {
			$table->foreign('IdUser')->references('IdUser')->on('User')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('OrderLine', function(Blueprint $table) {
			$table->foreign('IdOrder')->references('IdOrder')->on('Order')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('OrderLine', function(Blueprint $table) {
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
		Schema::table('Order', function(Blueprint $table) {
			$table->dropForeign('Order_IdUser_foreign');
		});
		Schema::table('OrderLine', function(Blueprint $table) {
			$table->dropForeign('OrderLine_IdOrder_foreign');
		});
		Schema::table('OrderLine', function(Blueprint $table) {
			$table->dropForeign('OrderLine_IdProduct_foreign');
		});
		Schema::table('Product', function(Blueprint $table) {
			$table->dropForeign('Product_IdCat_foreign');
		});
	}
}