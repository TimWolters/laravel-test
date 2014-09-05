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
				'data' => \Model\Employee::all()
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
	* Logs in an employee
	* @return Response
	*/
	public function signin(){
			$rules = array(
				'email'	=> 'required',
				'password'	=> 'required',
			);

		$validator = Validator::make(Input::all(), $rules);
		
		if($validator->fails()){
			return $validator->failed();
		}

		if(Auth::attempt(array(
				'email' => Input::get('email'), 
				'password' => Input::get('password')))){
			return Redirect::to('employees'); //change to personal tasks
		}
		return Redirect::to('login');
	}

	public function signout(){
		Auth::logout();
		return Redirect::to('/login');
	}


	public function login(){
		return View::make('employee.login');
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
				'email'		=> 'required|email|unique:employees',
				'password'	=> 'required|same:password_confirm'
			);

		$validator = Validator::make(Input::all(), $rules);
		
		if($validator->fails()){
			return $validator->failed();
		}
		
		$employee 						= new \Model\Employee;
		$employee->firstname 			= Input::get('firstname');
		$employee->lastname 			= Input::get('lastname');
		$employee->email 				= Input::get('email');
		$employee->password 			= Hash::make(Input::get('password'));
		$employee->save();
		return Redirect::to('./login/');
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
		return View::make('employee.edit', array('employee' => \Model\Employee::find($id)));
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
				'firstname'	=> 'required',
				'lastname'	=> 'required',
				'email'		=> 'required|email',
			);

		$validator = Validator::make(Input::all(), $rules);
		
		if($validator->fails()){
			return $validator->failed();
		} 

		$employee 				= \Model\Employee::find($id);
		$employee->firstname 	= Input::get('firstname');
		$employee->lastname 	= Input::get('lastname');
		$employee->email 		= Input::get('email');
		$employee->password 	= Input::get('password');
		$employee->save();
		return Redirect::to('employees');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		\Model\Employee::find($id)->delete();
		return Redirect::to('employees/');
	}


}
