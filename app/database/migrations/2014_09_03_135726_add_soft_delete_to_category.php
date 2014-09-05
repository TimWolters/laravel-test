<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSoftDeleteToCategory extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('categories', function($table){
			$table->softDeletes();
		});

		Schema::table('tasks', function($table){
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * might not work as intented
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('categories', function($table){
			$table->dropColumn('deleted_at');
		});

		Schema::table('tasks', function($table){
			$table->dropColumn('deleted_at');
		});
	}

}
