<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
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
        <img src="/public/assets/foto/logo.png" class="logo">
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../quiz/quiz.php">Quiz</a></li>
                <li><a href="../articles/articles.php">Articles</a></li>
            </ul>
        </nav>
        <div class="dropdown">
            <img src="/public/assets/foto/menu.png" class="menu-icon" alt="drop-down menu">
            <div class="dropdown-content">
                <a href="logIn.php">Log In</a>
                <a href="">Sign up</a>                    
            </div>
        </div>
  </div>

        <h1>Registration Form</h1>
        <p>Please fill out this form with the required information</p>
        <form method="post">
          <fieldset>
            <label for="first-name">Enter Your First Name: <input id="first-name" name="first-name" type="text" placeholder="e.g. Bardha" /></label>
            <label for="last-name">Enter Your Last Name: <input id="last-name" name="last-name" type="text" placeholder="e.g. Dema" /></label>
            <label for="email">Enter Your Email: <input id="email" name="email" type="email" placeholder="e.g. bardha123@gmail.com" required /></label>
            <label for="new-password">Create a New Password: <input id="new-password" name="new-password" type="password" placeholder="e.g. Aacwq!2f" /></label>
          </fieldset>
          <label for="terms-and-conditions">
            <!--eshte i linkum ni website i organizates qe flet per terms and conditions-->
            <input class="inline" id="terms-and-conditions" type="checkbox" required name="terms-and-conditions" /> I accept the <a href="https://www.bing.com/ck/a?!&&p=8469bd8285b19b29JmltdHM9MTcwMDk1NjgwMCZpZ3VpZD0wOTY3MTRkYi0wMzczLTZmMzAtMmNkMS0wNjMzMDIxODZlODYmaW5zaWQ9NTMwNg&ptn=3&ver=2&hsh=3&fclid=096714db-0373-6f30-2cd1-063302186e86&psq=rregullat+e+faqeve&u=a1aHR0cHM6Ly93d3cub3NjZS5vcmcvc3Evbm9kZS8yMjc4MDE&ntb=1">terms and conditions</a>
          </label>
          <input type="submit" value="Submit" />
        </form>
  <script src="/public/assets/js/regjistrohu.js"></script>
</body>
</html>
