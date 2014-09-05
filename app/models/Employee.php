<?php

namespace Model;

use \Illuminate\Auth\UserInterface;
use \Illuminate\Auth\Reminders\RemindableTrait;
use \Illuminate\Auth\Reminders\RemindableInterface;
use \Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletingTrait;

class Employee extends \Eloquent implements UserInterface, RemindableInterface {

	use SoftDeletingTrait;
	use RemindableTrait;

	protected $table = 'employees';
	protected $hidden = array('password', 'remember_token');

	public function tasks()
	{
		return $this->hasMany('Model\Task', 'foreign_key');
	}

	public function getauthIdentifier()
	{
		return $this->getKey();
	}

	public function getAuthPassword()
	{	
		return $this->password;
	}

	public function getRememberToken()
	{
		return $this->remember_token;
	}

	public function setRememberToken($rememberToken)
	{
		$this->remember_token = $rememberToken;
		$this->save();
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	public function getReminderEmail()
	{
		return $this->email;
	}
}