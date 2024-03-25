<?php

class Articles
{
    use Controller;

    public function index()
    {
        if (!isset($_SESSION['username'])) {
            // Redirect to the login page
            header('Location: ' . ROOT . '/users/logIn');
            exit;
        }



        $artist_model = new Artists_model;
        $album_model = new Albums_model;

        $data['artist'] = $artist_model->findAll();
        $data['album_reviews'] = $album_model->findAll();

        $this->view('articles/index', $data);
    }
}
