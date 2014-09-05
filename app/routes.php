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
	//api-documentation or landing page here
});

Route::get('login', array('https' => true, 'as' => 'employee.login', 'uses' => 'EmployeeController@login'));
Route::post('login', array('https' => true, 'as' => 'employee.signin', 'uses' => 'EmployeeController@signin'));

Route::get('tasks/before/{date}', 	array( 'as' => 'tasks.before', 'uses' => 'TaskController@getTasksBefore'));
Route::get('tasks/user/{userId}',	array( 'as' => 'tasks.fromUser', 'uses' => 'TaskController@getTasksOf'));
Route::get('tasks/sort/{column}/{orderParam}/', array( 'as' => 'tasks.sort', 'uses' => 'TaskController@getTasksOrderedBy'));
Route::get('tasks/me', 				array( 'as' => 'tasks.me', 'uses' => 'TaskController@getTasksOfMe'));
Route::post('tasks/complete/{id}',	array( 'as' => 'tasks.complete', 'uses' => 'TaskController@completeTask'));
Route::post('tasks/restore/{id}',	array( 'as' => 'tasks.restore', 'uses' => 'TaskController@restoreTask'));

Route::resource('employees', 'EmployeeController');
Route::resource('tasks', 'TaskController');
Route::resource('categories', 'CategoryController');