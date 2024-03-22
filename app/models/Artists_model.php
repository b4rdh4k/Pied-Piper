<?php 


/**
 * User class
 */
class Artists_model
{
	
	use Model;

	protected $table = 'artist';

	public function addArtist($data)
    {
        // Add the admin's name to the data array
        $data['added_by'] = $_SESSION['username']; // Assuming admin username is stored in session

        // Insert new artist into the database
        return $this->insert($data);
    }

	public function get_4_artists()
	{
		$sql = "SELECT * FROM artist LIMIT 4";
		return $this->query($sql);
	}
}