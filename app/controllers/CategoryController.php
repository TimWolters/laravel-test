<?php

class CategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('category.index', array(
				'keys' => array('id', 'name', 'description'),
				'data' => \Model\Category::all()
			));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('category.index', array(
				'keys' => array('id', 'name', 'description'),
				'data' => \Model\Category::all()
			));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
				'name'			=> 'required',
				'description'	=> 'required',
			);

		$validator = Validator::make(Input::all(), $rules);
		
		if($validator->fails()){
			return $validator->failed();
		} 

		$category 				= new \Model\Category;
		$category->name 		= Input::get('name');
		$category->description 	= Input::get('description');
		$category->save();
		return Redirect::to('/categories/');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('category.show', array('row' => \Model\Category::find($id)));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('category.edit', array('category' => \Model\Category::find($id), 'id' => $id));
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
				'name'			=> 'required',
				'description'	=> 'required',
			);

		$validator = Validator::make(Input::all(), $rules);
		
		if($validator->fails()){
			return $validator->failed();
		} 

		$category 				= \Model\Category::find($id);
		$category->name 		= Input::get('name');
		$category->description 	= Input::get('description');
		$category->save();
		return Redirect::to('/categories/');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		\Model\Category::destroy($id); 
		return Redirect::to('../categories');
	}


}
