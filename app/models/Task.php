<?php

namespace Model;

use \Illuminate\Database\Eloquent\SoftDeletingTrait;

class Task extends \Eloquent {

	use \SoftDeletingTrait;
	
	protected $table = 'tasks';


	public function employee()
	{
		return $this->belongsTo('Model\Employee');
	}

	public function category()
	{
		return $this->belongsTo('Model\Category');
	}
}