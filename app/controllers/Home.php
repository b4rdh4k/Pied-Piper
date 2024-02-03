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
			$artist_model = new Artists_model;
			$data['handpicked'] = $artist_model->get_4_artists();
			$this->view('ballina', $data);
		}else{
			header('location: users/logIn');
		}
	}

}
