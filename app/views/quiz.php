<!DOCTYPE html>
<html lang = "eng">
<head>
    <title>Quiz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatibile" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/public/assets/css/quiz.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <img src="/public/assets/foto/logo.png" class="logo">
            <nav>
                <ul>
                    <li><a href="ballina.php">Home</a></li>
                    <li><a href="">Quiz</a></li>
                    <li><a href="articles/articles.php">Articles</a></li>
                </ul>
            </nav>
            <div class="dropdown">
                <img src="/public/assets/foto/menu.png" class="menu-icon" alt="drop-down menu">
                <div class="dropdown-content">
                    <a href="users/logIn.php">Log In</a>
                    <a href="users/signup.php">Sign up</a>                    
                </div>
            </div>
      </div>
        <!--quiz-->
        <div id="quizquery">
            <h1>Find out what kind of Babastars fan are you.</h1>
            <p><span style="color: red;">Warning:</span> You will be judged.</p>
        </div>
        <div id="quiz"></div>
        <button id="submit">Submit Quiz</button>
        <div id="fan-status"></div>
        <div id="results"></div>
    </div>
    <script src="/public/assets/js/quiz.js"></script>
</body>
</html>
