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
                <a href="../login/login.html">Log In</a>
                <a href="../form/form.html">Sign up</a>                    
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
          const form = document.querySelector("form");
      
          form.addEventListener("submit", function(event) {
            
            const email = document.getElementById("email").value.trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
              alert("Please enter a valid email address.");
              event.preventDefault();
              return;
            }
      
  
            const name = document.getElementById("name").value.trim();
            const message = document.getElementById("message").value.trim();
      
            if (name === "") {
              alert("Please enter your name.");
              event.preventDefault();
              return;
            }
      
            if (message === "") {
              alert("Please enter your message.");
              event.preventDefault();
              return;
            }
          });
        });
      </script>
      
</body>
</html>
