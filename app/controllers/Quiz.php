<?php
class Quiz{
    use Controller;
    public function index(){
        $this->view('quiz');

        if (!isset($_SESSION['username'])) {
            // Redirect to the login page
            header('Location: ' . ROOT . '/users/logIn');
            exit;
        }
    }
}