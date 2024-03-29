<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function($table) {

			$table->increments('id');
			$table->string('productname');
			$table->integer('price');
			$table->binary('image');

			$table->unsignedInteger('admon_id');
			$table->unsignedInteger('category_id');
			$table->foreign('admon_id')->references('id')->on('admons')
					->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('category_id')->references('id')->on('categories')
					->onDelete('cascade')->onUpdate('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
