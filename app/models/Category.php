<?php

class Category extends Eloquent {

	protected $table = 'categories';

	public function tasks(){
		return $this->morphMany('Task', 'foreign_key');
	}
}