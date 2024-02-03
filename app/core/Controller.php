<?php 


Trait Controller
{
	

	public function view($name, $data = false)
	{
		$filename = "../app/views/".$name.".php";
		if(file_exists($filename))
		{
			if ($data) {
                extract($data);
            }
			require $filename;
		}else{

			$filename = "../app/views/404.view.php";
			require $filename;
		}
	}
}