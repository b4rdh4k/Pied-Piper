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
        <h1>Login Form</h1>
        <p>Please fill out this form with the required information</p>
        <form method="post">
          <fieldset>
            <label for="email">Email: <input id="email" name="email" type="email" required placeholder="enter your email"/></label>
            <label for="password">Password: <input id="password" name="password" type="password" placeholder="enter password" /></label>
          </fieldset>
          <input type="submit" value="Submit" />
        </form>
  <script src="/public/assets/js/logIn.js"></script>
</body>
</html>
