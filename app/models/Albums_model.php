<?php


/**
 * User class
 */
class Albums_model
{

    use Model;

    protected $table = 'album_reviews';

    public function addAlbumReview($data)
    {
        // Add the admin's name to the data array
        $data['added_by'] = $_SESSION['username']; // Assuming admin username is stored in session

        // Insert new album review into the database
        return $this->insert($data);
    }

    public function fetchAlbumImages()
    {
        $query = "select * from album_reviews order by id limit 10";

        return $this->query($query);
    }
}
