<?php

class Dashboard
{
    use Controller;
    
    public function index()
    {
        if (!isset($_SESSION['username'])) {
            // Redirect to the login page if not logged in
            header('Location: ' . ROOT . '/users/logIn');
            exit;
        }
        //per userat
        $user_model = new User_model;
        $allUsers = $user_model->findAll(); // Fetch all users
        // Count the total number of users
        $usersCount = count($allUsers);
        
        // Pass the user count to the view
        $data['usersCount'] = $usersCount;
        
        //per artistat
        $artist_model = new Artists_model;
        $allArtists = $artist_model->findAll(); // Fetch all artists
        // Count the total number of artists
        $artistsCount = count($allArtists);

        // Pass the artist count to the view
        $data['artistsCount'] = $artistsCount;

        //per albumet
        $album_model = new Albums_model;
        $allAlbums = $album_model->findAll(); // Fetch all albums
        // Count the total number of albums
        $albumsCount = count($allAlbums);

        // Pass the album count to the view
        $data['albumsCount'] = $albumsCount;

        // Fetch messages from the Contact_model
        $contact_model = new Contact_model;
        $messages = $contact_model->findAll(); // Fetch all messages

        // Pass the messages to the view
        $data['messages'] = $messages;

        // Pass the data to the view
        $this->view('dashboard', $data);
    }
}
