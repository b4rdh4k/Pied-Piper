<?php

class About
{
    use Controller;
    public function index(){
        if(!isset($_SESSION['name'])) {
            header('location: users/logIn');
            exit();
        }
        $about_model = new About_model;
        $data['about'] = $about_model->findAll();
        $this->view('about', $data);
    }
}
?>
