<?php


use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
	
class Employee extends Eloquent implements UserInterface, RemindableInterface {

	use SoftDeletingTrait;

	protected $table = 'employees';
	protected $hidden = array('password', 'remember_token');

	public function tasks(){
		return $this->belongsToMany('Task', 'foreign_key');
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






 	// private $userService;

 //    public function __construct(UserService $userService)
 //    {
 //        $this->userService = $userService;
 //    } 

	// public function retrieveByID($identifier)
 //    {
 //        $employee = $this->userService->findUserByUserIdentifier($identifier);

 //        if (!$employee instanceof Employee) {
 //            return false;
 //        }

 //        return new GenericUser([
 //            'id'        => $employee->getUserIdentifier(),
 //            'email'		=> $employee->getEmail()
 //        ]);
 //    }

 //    public function retrieveByCredentials(array $credentials)
 //    {
 //        /** @var Employee $user  */
 //        $user = $this->userService->findUserByUserName($credentials['email']);

 //        if (!$user instanceof Employee) {
 //            return false;
 //        }

 //        return new GenericUser([
 //            'id'        => $user->getUserIdentifier(),
 //            'email' 	=> $user->getEmail()
 //        ]);
 //    }

 //     public function validateCredentials(\Illuminate\Auth\UserInterface $user, array $credentials)
 //     {
 //         $validated = $this->userService->validateUserCredentials(
 //             $credentials['email'],
 //             $credentials['password']
 //         );

 //         $validated = $validated && $user->email = $credentials['email'];

 //         return $validated;
 //     }
}