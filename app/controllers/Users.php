<?php

class Users
{
    use Controller;

    public function index()
    {
        $this->view('users');
    }

    

    public function logIn()
    {
        if(isset($_POST['email'])) //if the log in button is clicked. If the login form is submitted
        {
            //do this

            /*
            1. get the email and password
            2. check if the email and password combination exists in the database
            */

            $email = $_POST['email'];
            $password = $_POST['password'];

            $usermodel = new User;

            $arr = [
                'email' => $email,
                'password' => $password,
            ];

            $result = $usermodel->first($arr);
            
            if($result == true)
            {
                            //you are logged in
                $_SESSION['grouptype'] = $result->grouptype;
                $_SESSION['name'] = $result->firstname;
                $_SESSION['lastname'] = $result->lastname;
                $_SESSION['email'] = $email;
                header('location: ../home');
            }else{
                header('location: logIn');
                exit;
            }
            
        }
        $this->view('users/logIn');
    }
    public function logout(){
        session_start();

        session_destroy();
        
        header('location: logIn');
    }
    
}
