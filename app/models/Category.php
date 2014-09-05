<?php

namespace Model;

class Category extends \Eloquent {

	protected $table = 'categories';

	public function tasks(){
		return $this->hasMany('Model\Task', 'foreign_key');
	}
}