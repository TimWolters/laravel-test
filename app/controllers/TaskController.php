<?php

class TaskController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('task.index', array(
				'keys' => array('id', 'title', 'description', 'category_id', 'employee_id', 'due_date'),
				'data' => Task::all()
			));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('task.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
				'title'			=> 'required',
				'description'	=> 'required',
				'category_id'	=> 'required',
				'employee_id'	=> 'required'
			);

		$validator = Validator::make(Input::all(), $rules);
		
		if($validator->fails()){
			return $validator->failed();
		}

		$task = new Task;
		$task->title = Input::get('title');		
		$task->description = Input::get('description');
		$task->category_id = Input::get('category_id');
		$task->employee_id = Input::get('employee_id');
		$task->save();
		return Redirect::to('./tasks/');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('task.edit', array('task' => Task::find($id)));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
				'title'			=> 'required',
				'description'	=> 'required',
				'category_id'	=> 'required',
				'employee_id'	=> 'required'
			);

		$validator = Validator::make(Input::all(), $rules);
		
		if($validator->fails()){
			return $validator->failed();
		}

		$task = new Task;
		$task->title = Input::get('title');		
		$task->description = Input::get('description');
		$task->category_id = Input::get('category_id');
		$task->employee_id = Input::get('employee_id');
		$task->save();
		return Redirect::to('./tasks/');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Task::find($id)->delete();
		return Redirect::to('./tasks/');
	}


}
