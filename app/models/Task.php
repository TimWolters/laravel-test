<?php
	
class Task extends Eloquent {

	protected $table = 'tasks';


	public function employee(){
		return $this->belongsTo('Employee', 'foreign_key');
	}

	public function category(){
		return $this->belongsTo('Category', 'foreign_key');
	}
}