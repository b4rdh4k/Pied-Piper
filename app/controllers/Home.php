<?php 

/**
 * home class
 */
class Home
{
	use Controller;

	public function index()
	{
		if(isset($_SESSION['email']))
		{
			$this->view('ballina');
		}else{
			header('location: users/logIn');
		}
	}

}
