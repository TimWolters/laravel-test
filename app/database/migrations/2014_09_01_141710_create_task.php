<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTask extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function($table){
			$table->increments('id');
			$table->string('title', 200);
			$table->text('description');
			//TODO join tables
			$table->integer('category_id');
			$table->integer('employee_id');

			$table->timestamp('due_date');
			$table->timestamp('completed_at');
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
		Schema::drop('task');
	}

}
