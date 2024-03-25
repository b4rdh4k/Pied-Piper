<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/logIn.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    $flash = new Flash;

    $x = $flash->get('success');
    $y = $flash->get('danger');
    ?>

    <?php if ($x) : ?>
        <div class="alert alert-success">
            <?= $x ?>
        </div>
    <?php endif; ?>
    <?php if ($y) : ?>
        <div class="alert alert-error">
            <?= $y ?>
        </div>
    <?php endif; ?>

    <div class="container">
        <div class="navbar">
            <img src="<?php echo ROOT ?>/assets/img/logo.png" class="logo">
            <nav>
                <a class="sign" href="<?php echo ROOT ?>/users/signUp">Sign Up</a>
            </nav>
        </div>
        <hr>
        <h1>Login Form</h1>
        <form method="post">
            <fieldset>
                <label for="username">Enter username: <input id="username" name="username" type="text" placeholder="Enter username" required /></label>
                <label for="password">Password: <input id="password" name="password" type="password" placeholder="enter password" /></label>
            </fieldset>
            <input type="submit" value="Log In" />
        </form>
    </div>
    <script src="/public/assets/js/logIn.js"></script>
</body>

</html>