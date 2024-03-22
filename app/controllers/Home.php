<?php 

/**
 * home class
 */
class Home
{
	use Controller;

	public function index()
	{
		if (!isset($_SESSION['username'])) {
			// Redirect to the login page
			header('Location: ' . ROOT . '/users/logIn');
			exit;
		}
		
		if(isset($_SESSION['username']))
		{
			$artist_model = new Artists_model;
			$data['handpicked'] = $artist_model->get_4_artists();
			$this->view('ballina', $data);
		}else{
			header('location: users/logIn');
		}

	}

}
