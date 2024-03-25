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

		$albumsModel = new Albums_model();
		$img = $albumsModel->fetchAlbumImages();

		$this->view('ballina', ['sliderImages' => $img]);
	}
}
