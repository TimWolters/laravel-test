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
				'data' => \Model\Task::with('employee', 'category')->get(), 
				'employees' => \Model\Employee::lists('email','id'), 
				'categories' => \Model\Category::lists('name', 'id'),
			));
	}

	public function getTasksOfMe(){
		return View::make('task.index', array(
				'data' => \Model\Task::where('employee_id', '=', Auth::id())->get(), 
				'employees' => \Model\Employee::lists('email','id'), 
				'categories' => \Model\Category::lists('name', 'id')));
	}

	public function getTasksOf($userId){
		return View::make('task.index', array(
				'data' => \Model\Task::where('employee_id', '=', $userId)->get(), 
				'employees' => \Model\Employee::lists('email','id'), 
				'categories' => \Model\Category::lists('name', 'id')));
	}

	//deliver date in yyyy-mm-dd hh:mm:ss
	public function getTasksBefore($date)
	{
		return View::make('task.index', array(
				'data' => \Model\Task::where('due_date', '<', date($date))->get(), 
				'employees' => \Model\Employee::lists('email','id'), 
				'categories' => \Model\Category::lists('name', 'id')
			));
	}

	public function getTasksOrderedBy($column, $orderParam)
	{
		return View::make('task.index', array(
				'data' => \Model\Task::orderBy($column, $orderParam)->get(),
				'employees' => \Model\Employee::lists('email','id'), 
				'categories' => \Model\Category::lists('name', 'id')
			));
	}

	public function getDeletedTasks()
	{
		return View::make('task.index', array(
				'data' => \Model\Task::onlyTrashed()->with('employee', 'category')->get(),
				'employees' => \Model\Employee::lists('email','id'), 
				'categories' => \Model\Category::lists('name', 'id')
			));
	}

	public function completeTask($id)
	{
		$task 					= \Model\Task::find($id);
		$task->completed_at 	= strtotime(time());
		$task->save();
		return View::make('task.index', array(
				'data' => \Model\Task::with('employee', 'category')->get(), 
				'employees' => \Model\Employee::lists('email','id'), 
				'categories' => \Model\Category::lists('name', 'id'),
			));

	}

	public function necroTask($id)
	{
		$task 					= \Model\Task::find($id);
		$task->restore();
		return View::make('task.index', array(
				'data' => \Model\Task::with('employee', 'category')->get(), 
				'employees' => \Model\Employee::lists('email','id'), 
				'categories' => \Model\Category::lists('name', 'id'),
			));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('task.create', 
				['employees' => \Model\Employee::lists('email','id'), 
				'categories' => \Model\Category::lists('name', 'id')]
			);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
				'title'			=> 'required|min:1|max:200',
				'description'	=> 'required|min:1|max:65536',
				'category_id'	=> 'required|exists:categories,id',
				'employee_id'	=> 'required|exists:employees,id',
				'due_date'		=> 'date',
				'completed_at'	=> 'date'
			);

		$validator = Validator::make(Input::all(), $rules);
		
		if($validator->fails()){
			return $validator->failed();
		}

		$task 				= new \Model\Task;
		$task->title 		= Input::get('title');		
		$task->description 	= Input::get('description');
		$task->category_id 	= Input::get('category_id');
		$task->employee_id	= Input::get('employee_id');
		$task->due_date		= Input::get('due_date');
		$task->completed_at	= Input::get('completed_at');
		$task->save();
		return Redirect::to('tasks/');
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
		return View::make('task.edit', array(
				'task' 			=> \Model\Task::find($id), 
				'employees' 	=> \Model\Employee::lists('email','id'), 
				'categories' 	=> \Model\Category::lists('name', 'id')
			));
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
				'title'			=> 'required|min:1|max:200',
				'description'	=> 'required|min:1|max:65536',
				'category_id'	=> 'required|exists:categories,id',
				'employee_id'	=> 'required|exists:employees,id',
			);

		$validator = Validator::make(Input::all(), $rules);
		
		if($validator->fails()){
			return $validator->failed();
		}

		$task 				= \Model\Task::find($id);
		$task->title 		= Input::get('title');		
		$task->description 	= Input::get('description');
		$task->category_id 	= Input::get('category_id');
		$task->employee_id 	= Input::get('employee_id');
		if(Input::has('due_date')){
			$task->due_date		= Input::get('due_date');
		}
		if(Input::has('completed_at')){
			$task->completed_at = Input::get('completed_at');
		}

		$task->save();
		return Redirect::to('tasks');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		\Model\Task::find($id)->delete();
		return Redirect::to('./tasks/');
	}


}
