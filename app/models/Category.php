<?php

class Category extends Eloquent {

	protected $table = 'categories';

	public function tasks(){
		return $this->hasMany('Task', 'foreign_key');
	}
}