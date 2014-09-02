<?php


class EmployeeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('employee.index', array(
				'keys' => array('id', 'firstname', 'lastname', 'email'),
				'data' => Employee::all()
			));
	}


	/**
	 * Show the form for creating a new resource.
	 * @return Response
	 */
	public function create()
	{
		return View::make('employee.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
				'firstname'	=> 'required',
				'lastname'	=> 'required',
				'email'		=> 'required|email',
				'password'	=> 'required',
			);

		$validator = Validator::make(Input::all(), $rules);
		
		if($validator->fails()){
			return $validator->failed();
		} 

		$employee 				= new Employee;
		$employee->firstname 	= Input::get('firstname');
		$employee->lastname 	= Input::get('lastname');
		$employee->email 		= Input::get('email');
		$employee->password 	= Input::get('password');
		return $employee->id;
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//return View::make('employee.index', array('employee' => Employee::find($id)));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$employee = Employee::find($id);
		echo Form::model($employee, array('EmployeeController@update', $employee->id));
		echo Form::close();
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Response::make(Employee::find($id)->delete(), 204);
	}


}
