<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tasks', function($table){
			$table->foreign('category_id')->references('id')->on('categories');
			$table->foreign('employee_id')->references('id')->on('employees');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tasks', function($table){
			$table->dropForeign('posts_category_id_foreign');
			$table->dropForeign('posts_employee_id_foreign');
		});
	}

}
