<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/signUp.css">
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
    
    <?php if ($x): ?>
            <div class="alert alert-success">
                <?= $x ?>
            </div>
        <?php endif; ?>
        <?php if ($y): ?>
            <div class="alert alert-error">
                <?= $y ?>
            </div>
    <?php endif; 
    ?>
        <h1>Registration Form</h1>
    <p>Please fill out this form with the required information</p>

        <form method="post">
            <fieldset>
            <label for="username">Choose a Username: <input id="username" name="username" type="text" placeholder="Enter username" required /></label>
            <label for="firstname">Enter Your First Name: <input id="firstname" name="firstname" type="text" placeholder="Enter your first name" required /></label>
            <label for="lastname">Enter Your Last Name: <input id="lastname" name="lastname" type="text" placeholder="Enter your last name" required /></label>
            <label for="email">Enter Your Email: <input id="email" name="email" type="email" placeholder="Enter your email" required /></label>
            <label for="new-password">Create a New Password: <input id="new-password" name="new_password" type="password" placeholder="Enter your password" required /></label>
            <label for="confirm-password">Confirm Password: <input id="confirm-password" name="confirm_password" type="password" placeholder="Re-enter your password" required /></label>
        </fieldset>
            <label for="terms-and-conditions">
                <input class="inline" id="terms-and-conditions" type="checkbox" required name="terms_and_conditions" /> I accept the <a href="https://www.bing.com/ck/a?!&&p=8469bd8285b19b29JmltdHM9MTcwMDk1NjgwMCZpZ3VpZD0wOTY3MTRkYi0wMzczLTZmMzAtMmNkMS0wNjMzMDIxODZlODYmaW5zaWQ9NTMwNg&ptn=3&ver=2&hsh=3&fclid=096714db-0373-6f30-2cd1-063302186e86&psq=rregullat+e+faqeve&u=a1aHR0cHM6Ly93d3cub3NjZS5vcmcvc3Evbm9kZS8yMjc4MDE&ntb=1">terms and conditions</a>
            </label>
            <input type="submit" name="submit" value="Sign up" />
        </form>
   <script src="<?php echo ROOT ?>/public/assets/js/signup.js"></script>
    </body>
    </html>
