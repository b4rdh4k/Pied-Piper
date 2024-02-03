<?php 


/**
 * User class
 */
class Artists_model
{
	
	use Model;

	protected $table = 'artist';

	// protected $allowedColumns = [
	// 	'email',
	// 	'password',
	// ];

	public function get_4_artists()
	{
		$sql = "SELECT * FROM artist LIMIT 4";
		return $this->query($sql);
	}
}