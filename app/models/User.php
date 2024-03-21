<?php 


/**
 * User class
 */
class User
{
	
	use Model;

	protected $table = 'users';

	protected $allowedColumns = [

		'email',
		'password',
		'grouptype',
		'firstname',
		'lastname',
		'username'
	];
	
	public function validate($data)
	{
		$this->errors = [];

		if(empty($data['email']))
		{
			$this->errors['email'] = "Email is required";
		}else
		if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL))
		{
			$this->errors['email'] = "Email is not valid";
		}
		
		if(empty($data['password']))
		{
			$this->errors['password'] = "Password is required";
		}
		
		if(empty($data['username']))
		{
			$this->errors['username'] = "Username is required";
		}

		if(empty($data['firstname']))
		{
			$this->errors['firstname'] = "First name is required";
		}

		if(empty($data['lastname']))
		{
			$this->errors['lastname'] = "Last name is required";
		}


		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}
}