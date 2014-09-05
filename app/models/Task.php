<?php
	
class Task extends Eloquent {

	protected $table = 'tasks';


	public function employee(){
		return $this->hasOne('Employee', 'id');
	}

	public function category(){
		return $this->hasOne('Category', 'id');
	}
}