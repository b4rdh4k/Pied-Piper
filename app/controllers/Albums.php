<?php 

/**
 * home class
 */
class Albums
{
	use Controller;

    public function create($id = null)
    {
        if(!$_SESSION['name'])
        {
            header('location: users/logIn');
        }

        if(isset($_POST['artist']))
        {
            $data = [
                'artist' => $_POST['artist'],
                'album_title' => $_POST['album_title'],
                'rating' => $_POST['rating'],
                'brief_review' => $_POST['brief_review'],
                'detailed_review' => $_POST['detailed_review'],
                'genre' => $_POST['genre'],
                'date_reviewed' => $_POST['date_reviewed'],
                'label' => $_POST['label'],
                'albumimage' => $_POST['albumimage'],
            ];
            $album_model = new Albums_model;

            $album_model->insert($data);

            return header('location: ../articles');
        }

        $this->view('articles/createAlbum');
    }

    public function viewAlbum($id)
    {
        if(!$_SESSION['name'])
        {
            header('location: users/logIn');
        }

        $album_model = new Albums_model;
        $data['album_reviews'] = $album_model->first(['id' => $id]);
      //  print_r($data);die;
        $this->view('articles/albumview', $data);
    }

    public function delete($id)
    {
        if(!$_SESSION['name'])
        {
            header('location: users/logIn');
        }

        $album_model = new Albums_model;
        $album_model->delete($id);
        header('location: ../../articles');
    }

    public function edit($id){
        if(!$_SESSION['name'])
        {
            header('location: users/logIn');
        }

        $album_model = new Albums_model;
        $data['album'] = $album_model->first(['id' => $id]);
        if(isset($_POST['album_title']))
        {
            $data = [
                'artist' => $_POST['artist'],
                'album_title' => $_POST['album_title'],
                'rating' => $_POST['rating'],
                'brief_review' => $_POST['brief_review'],
                'detailed_review' => $_POST['detailed_review'],
                'genre' => $_POST['genre'],
                'date_reviewed' => $_POST['date_reviewed'],
                'label' => $_POST['label'],
                'albumimage' => $_POST['albumimage'],
            ];

            $album_model->update($id, $data);
            header('location: ../../artists/viewAlbum/'.$id);
        }
        $this->view('articles/albumEdit', $data);
    }
}
