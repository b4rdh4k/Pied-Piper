<?php

class Articles
{
    use Controller;

    public function index()
    {
        $artist_model = new Artists_model;
        $album_model = new Albums_model;

        $data['artist'] = $artist_model->findAll();
        $data['album_reviews'] = $album_model->findAll();

        $this->view('articles/index', $data);
    }
}

?>
