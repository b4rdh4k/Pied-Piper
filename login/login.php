<?php

$host = "localhost";
$user = "root";
$password = "";
$db_name = "logform";

$conn = new mysqli($host, $user, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['email'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM loginform WHERE email = '$email' AND password = '$password' LIMIT 1";
    $result = $conn->query($sql);

    if ($result && $result->num_rows == 1) {
        echo "You have successfully logged in";
        exit();
    } else {
        echo "You have entered incorrect password";
        exit();
    }
}

$conn->close();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="logstyle.css">
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
                <a href="">Log In</a>
                <a href="../form/form.html">Sign up</a>                    
            </div>
        </div>
  </div>

        <h1>Login Form</h1>
        <p>Please fill out this form with the required information</p>
        <form method="post" action="#">
          <fieldset>
            <label for="email">Email: <input id="email" name="email" type="email" required placeholder="enter your email"/></label>
            <label for="password">Password: <input id="password" name="password" type="password" placeholder="enter password" /></label>
          </fieldset>
          <input type="submit" value="Submit" />
        </form>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
              const form = document.querySelector("form");
          
              form.addEventListener("submit", function(event) {
                // validimi emailit
                const email = document.getElementById("email").value.trim();
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                  alert("Please enter a valid email address.");
                  event.preventDefault();
                  return;
                }
          
                // validimi passiiit
                const password = document.getElementById("password").value;
                const passwordRegex = /[a-z0-9]{8,}/;
                if (!passwordRegex.test(password)) {
                  alert("Please enter a valid password with at least 8 characters.");
                  event.preventDefault();
                  return;
                }
              });
            });
          </script>
</body>
</html>
