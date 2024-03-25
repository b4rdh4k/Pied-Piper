<?php

/**
 * home class
 */
class Artists
{
    use Controller;

    public function create($id = null)
    {
        if (!$_SESSION['name']) {
            header('location: users/logIn');
        }

        $added_by = $_SESSION['username']; //per me marr usernamein e adminit

        if (isset($_POST['artistName'])) {
            $data = [
                'artist_name' => $_POST['artistName'],
                'genre' => $_POST['genre'],
                'artist_image' => $_POST['artistImage'],
                'review_date' => $_POST['reviewDate'],
                'review_content' => $_POST['reviewContent'],
                'label' => $_POST['label'],
                'added_by' => $added_by
            ];
            $artist_model = new Artists_model;

            $artist_model->insert($data);

            return header('location: ../articles');
        }

        $this->view('articles/createArtist');
    }

    public function viewArtist($id)
    {
        if (!$_SESSION['name']) {
            header('location: users/logIn');
        }

        $artist_model = new Artists_model;
        $data['artist'] = $artist_model->first(['id' => $id]);
        $this->view('articles/artistview', $data);
    }

    public function delete($id)
    {
        if (!$_SESSION['name']) {
            header('location: users/logIn');
        }

        $artist_model = new Artists_model;
        $artist_model->delete($id);
        header('location: ../../articles');
    }

    public function edit($id)
    {
        if (!$_SESSION['name']) {
            header('location: users/logIn');
        }

        $edited_by = $_SESSION['username']; //usernamei adminit edhe ktu

        $artist_model = new Artists_model;
        $data['artist'] = $artist_model->first(['id' => $id]);
        if (isset($_POST['artistName'])) {
            $data = [
                'artist_name' => $_POST['artistName'],
                'genre' => $_POST['genre'],
                'artist_image' => $_POST['artistImage'],
                'review_date' => $_POST['reviewDate'],
                'review_content' => $_POST['reviewContent'],
                'label' => $_POST['label'],
                'edited_by' => $edited_by
            ];

            $artist_model->update($id, $data);
            header('location: ../../artists/viewArtist/' . $id);
        }
        $this->view('articles/artistEdit', $data);
    }
}
