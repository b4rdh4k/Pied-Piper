<?php

class Users
{
    use Controller;
    private $flash;

    public function __construct()
    {
        $this->flash = new Flash();
    }

    public function index()
    {
        $this->view('users');
    }

    public function logIn()
    {
        if (isset($_POST['username'])) { // Check if the log in form is submitted
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Validate form data (you can add more validation as needed)
            if (empty($username) || empty($password)) {
                // Handle validation errors
                $this->flash->create('danger', 'Please fill out all the fields.');
                header('Location: logIn');
                exit;
            }

            $userModel = new User;

            $arr = [
                'username' => $username,
                'password' => $password,
            ];

            $result = $userModel->first($arr);
            if ($result == true) {
                // Logged in successfully
                $_SESSION['grouptype'] = $result->grouptype;
                $_SESSION['name'] = $result->firstname;
                $_SESSION['lastname'] = $result->lastname;
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $result->email;
                header('Location: ../home');
                exit;
            } else {
                // Redirect back to login page
                $this->flash->create('danger', "Invalid username or password.");
                header('Location: logIn');
                exit;
            }
        }

        $this->view('users/logIn');
    }

    public function logout()
    {
        session_start(); // Start the session
        session_unset(); // Unset all session variables
        session_destroy(); // Destroy the session
        header('Location: ' . ROOT . '/users/logIn'); // Redirect to login page
        exit;
    }


    public function signUp()
    {
        if (isset($_POST['submit'])) { // Check if the sign-up form is submitted
            // Retrieve form data
            $username = $_POST['username'];
            $firstName = $_POST['firstname'];
            $lastName = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['new_password'];
            $confirmPassword = $_POST['confirm_password'];
            $termsAndConditions = isset($_POST['terms_and_conditions']) ? $_POST['terms_and_conditions'] : false;

            // Validate form data (you can add more validation as needed)
            if (empty($username) || empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword) || !$termsAndConditions) {
                // Handle validation errors
                $this->flash->create('danger', 'Please fill out all the fields and accept the terms and conditions.');
                header('Location: signUp');
                exit;
            }

            // Check if passwords match
            if ($password !== $confirmPassword) {
                $this->flash->create('danger', 'The passwords do not match!');
                header('Location: signUp');
                exit;
            }


            // Instantiate the User model
            $userModel = new User();

            // Check if the username already exists in the database
            $existingUser = $userModel->first(['username' => $username]);
            if ($existingUser) {
                $this->flash->create('danger', 'Username already exists. Please choose another username.');
                header('Location: signUp');
                exit;
            }

            // Check if the email already exists in the database
            $existingEmail = $userModel->first(['email' => $email]);
            if ($existingEmail) {
                $this->flash->create('danger', 'Email already exists. Please use another email address.');
                header('Location: signUp');
                exit;
            }

            // Insert new user into the database
            $user = [
                'username' => $username,
                'firstname' => $firstName,
                'lastname' => $lastName,
                'email' => $email,
                'password' => $password,
                'grouptype' => '1'
            ];

            $inserted = $userModel->insert($user);

            if ($inserted) {
                $this->flash->create('success', 'User registered successfully.');
                header('Location: ' . ROOT . '../home');
                exit;
            } else {
                $this->flash->create('danger', 'Registration failed. Please try again later.');
                header('Location: ' . ROOT . '/users/signUp');
                exit;
            }
        }

        $this->view('users/signUp');
    }
}
