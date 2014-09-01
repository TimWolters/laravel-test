<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
	// Schema::create('employees', function($table){
	// 	$table->increments('id')->primary();
	// 	$table->string('firstname', 100);
	// 	$table->string('lastname', 200);
	// 	$table->string('email', 200)->unique();
	// 	$table->string('password', 60);
	// 	$table->timestamps();
	// 	$table->softDeletes();
	// });
	// Schema::create('categories', function($table){
	// 		$table->increments('id')->primary();
	// 		$table->string('name', 100);
	// 		$table->text('description');
	// 		$table->timestamps();
	// 	});
	// Schema::create('tasks', function($table){
	// 		$table->increments('id')->primary();
	// 		$table->string('title', 200);
	// 		$table->text('description');
	// 		//TODO join tables
	// 		$table->integer('category_id');
	// 		$table->integer('employee_id');

	// 		$table->timestamp('due_date');
	// 		$table->timestamp('completed_at');
	// 		$table->timestamps();
	// 	});
	return View::make('hello');
});


Route::get('/employees/', function()
{
	return Response::make(Employee::all(), 200);
});

Route::get('/employee/{id?}', function($id)
{
	return Response::make(Employee::find($id), 200);
});

Route::post('/employee/', function()
{
	$employee = new Employee;
	$employee->firstname = Request::header('firstname');
	$employee->lastname = Request::header('lastname');
	$employee->email = Request::header('email');
	$employee->password = Request::header('password');
	$employee->save();
	return $employee->id;
});

Route::put('/employee/{id}', function($id)
{
	$employee = Employee::find($id);
	$employee->firstname = Request::header('firstname');
	$employee->lastname = Request::header('lastname');
	$employee->email = Request::header('email');
	$employee->password = Request::header('password');
	$employee->update();
});

Route::delete('/employee/{id}', function($id)
{
	Employee::find($id)->delete();
});


//crud call taak + lijst
//crud call werknemer + lijst
//link taak -> categorie
