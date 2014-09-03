<?php
	
class Employee extends Eloquent {

	protected $table = 'employees';

	public function tasks(){
		return $this->hasMany('Task', 'foreign_key');
	}

}