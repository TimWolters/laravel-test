<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployees extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function($table){
			$table->increments('id');
			$table->string('firstname', 100);
			$table->string('lastname', 200);
			$table->string('email', 200)->unique();
			//TODO fix password
			$table->string('password', 60);

			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
			Schema::drop('employee');
	}

}
