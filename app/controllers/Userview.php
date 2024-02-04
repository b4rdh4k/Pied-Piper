<?php
class Userview
{
    use Controller;
    public function index(){
        if(!isset($_SESSION['name'])) {
            header('location: users/logIn');
            exit();
        }
        $_model = new User_model;
        $data['users'] = $_model->findAll();
        $this->view('', $data);
    }
}
?>