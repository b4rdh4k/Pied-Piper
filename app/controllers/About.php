<?php

class About
{
    use Controller;
    public function index(){
        if(!isset($_SESSION['username'])) {
            header('location: users/logIn');
            exit();
        }
        $about_model = new About_model;
        $data['about'] = $about_model->findAll();
        $this->view('about', $data);

        if (!isset($_SESSION['username'])) {
            // Redirect to the login page
            header('Location: ' . ROOT . '/users/logIn');
            exit;
        }

    }
}
