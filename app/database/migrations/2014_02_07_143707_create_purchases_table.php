<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchases', function($table) {

			$table->increments('id');
			$table->dateTime('datepurchase');
			$table->unsignedInteger('product_id');
			$table->unsignedInteger('customer_id');
			$table->foreign('product_id')->references('id')->on('products');
			$table->foreign('customer_id')->references('id')->on('customers');
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
		Schema::drop('purchases');
	}

}
