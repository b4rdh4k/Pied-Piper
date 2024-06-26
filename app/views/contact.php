<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="<?php echo ROOT ?>/assets/img/logo.png" class="logo">
            <nav>
                <ul>
                    <li><a href="<?php echo ROOT ?>/home/index">Home</a></li>
                    <li><a href="<?php echo ROOT ?>/quiz">Quiz</a></li>
                    <li><a href="<?php echo ROOT ?>/about">About</a></li>
                    <li><a href="<?php echo ROOT ?>/articles/index">Articles</a></li>
                    <?php if ($_SESSION['grouptype'] == 0) : ?>
                        <li><a href="<?php echo ROOT ?>/dashboard">Dashboard</a></li>
                    <?php endif; ?>
                    <?php if ($_SESSION['grouptype'] == 1) : ?>
                        <li><a href="">Contact</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
            <div class="dropdown">
                <img src="<?php echo ROOT ?>/assets/img/menu.png" class="menu-icon" alt="drop-down menu">
                <div class="dropdown-content">
                    <a href="<?php echo ROOT ?>/users/logout">Log out</a>
                </div>
            </div>
        </div>
        <h1>Contact Us</h1>
        <p>Feel free to reach out to us using the form below:</p>
        <form method="post" action="" id="contactForm">
            <fieldset>
                <label for="name">Name: <input id="name" name="name" type="text" placeholder="enter your name" /></label>
                <label for="email">Email: <input id="email" name="email" type="email" placeholder="enter your email" /></label>
                <label for="message">Message: <textarea id="message" name="message" placeholder="enter your message"></textarea></label>
            </fieldset>
            <input type="submit" value="Submit" />
        </form>
    </div>
    <script src="<?php echo ROOT ?>/assets/js/contact.js"></script>
</body>

</html>