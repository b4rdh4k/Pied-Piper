<?php
session_start();

require_once "Database.php";
require_once "UserRegistration.php";

class RegistrationPage {
    private $userRegistration;

    public function __construct(UserRegistration $userRegistration) {
        $this->userRegistration = $userRegistration;
    }

    public function handleRegistration() {
        $registrationResult = null;

        // Check if the form is submitted
        if (isset($_POST["submit"])) {
            // Get user input
            $firstname = $_POST["first_name"];
            $lastname = $_POST["last_name"];
            $email = $_POST["email"];
            $password = $_POST["new_password"];
            
            // Set the role to "user" by default
            $role = "user";

            // Call the registerUser method
            $registrationResult = $this->userRegistration->registerUser($firstname, $lastname, $email, $password, $role);
        }

        return $registrationResult;
    }
}

// Initialize UserRegistration object with the database connection
$database = new Database("localhost", "root", "", "oopregister");
$userRegistration = new UserRegistration($database);

// Initialize RegistrationPage
$registrationPage = new RegistrationPage($userRegistration);

// Handle registration
$registrationResult = $registrationPage->handleRegistration();

// Default role for registered users
$role = 'user'; 
$user->addUser($username, $password, $role);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="formstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <img src="../img/logo.png" class="logo">
            <nav>
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../quiz/quiz.html">Quiz</a></li>
                    <li><a href="../articles/articles.html">Articles</a></li>
                </ul>
            </nav>
            <div class="dropdown">
                <img src="../img/menu.png" class="menu-icon" alt="drop-down menu">
                <div class="dropdown-content">
                    <a href="login.php">Log In</a>
                    <a href="registration.php">Sign up</a>                    
                </div>
            </div>
        </div>

        <h1>Registration Form</h1>
        <p>Please fill out this form with the required information</p>

        <?php
        // Display registration result or errors
        if (isset($registrationResult)) {
            echo "<div class='alert alert-success'>$registrationResult</div>";
        }
        ?>

        <form method="post" action="registration.php">
            <fieldset>
                <label for="first-name">Enter Your First Name: <input id="first-name" name="first_name" type="text" placeholder="e.g. Bardha" /></label>
                <label for="last-name">Enter Your Last Name: <input id="last-name" name="last_name" type="text" placeholder="e.g. Dema" /></label>
                <label for="email">Enter Your Email: <input id="email" name="email" type="email" placeholder="e.g. bardha123@gmail.com" required /></label>
                <label for="new-password">Write a Password: <input id="new-password" name="new_password" type="password" placeholder="e.g. Aacwq!2f" /></label>
            </fieldset>
            <label for="terms-and-conditions">
                <input class="inline" id="terms-and-conditions" type="checkbox" required name="terms_and_conditions" /> I accept the <a href="https://www.bing.com/ck/a?!&&p=8469bd8285b19b29JmltdHM9MTcwMDk1NjgwMCZpZ3UaZD0wOTY3MTRkYi0wMzczLTZmMzAtMmNkMS0wNjMzMDIxODZlODYmaW5zaWQ9NTMwNg&ptn=3&ver=2&hsh=3&fclid=096714db-0373-6f30-2cd1-063302186e86&psq=rregullat+e+faqeve&u=a1aHR0cHM6Ly93d3cub3NjZS5vcmcvc3Evbm9kZS8yMjc4MDE&ntb=1">terms and conditions</a>
            </label>
            <input type="submit" name="submit" value="Submit" />
        </form>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const form = document.querySelector("form");

                form.addEventListener("submit", function (event) {

                    // Validations here...

                });
            });
        </script>
    </body>
</html>
