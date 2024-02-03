<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="contact.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="navbar">
        <img src="/public/assets/foto/logo.png" class="logo">
        <nav>
            <ul>
                <li><a href="ballina.php">Home</a></li>
                <li><a href="quiz.php">Quiz</a></li>
                <li><a href="articles/index.php">Articles</a></li>
            </ul>
        </nav>
        <div class="dropdown">
            <img src="../img/menu.png" class="menu-icon" alt="drop-down menu">
                <div class="dropdown-content">
                    <a href="users/logIn.php">Log In</a>
                    <a href="users/signup.php">Sign up</a>                    
                </div>
        </div>
    </div>

    <h1>Contact Us</h1>
    <p>Feel free to reach out to us using the form below:</p>
    
    <form method="post">
        <fieldset>
            <label for="name">Name: <input id="name" name="name" type="text" required placeholder="enter your name" /></label>
            <label for="email">Email: <input id="email" name="email" type="email" required placeholder="enter your email" /></label>
            <label for="message">Message: <textarea id="message" name="message" required placeholder="enter your message"></textarea></label>
        </fieldset>
        <input type="submit" value="Submit" />
    </form>
    </div>
    <script src="/public/assets/js/contact.js"></script>
</body>
</html>
