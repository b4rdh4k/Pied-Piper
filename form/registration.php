<?php
    session_start();
    if(isset($_SESSION["user"])){
        header("Location: ../index.php");
    }
?>

<?php
if (isset($_POST["submit"])) {
    $firstname = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["new_password"];

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array(); // Initialize the errors array

    // Check if any field is empty
    if (empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
        array_push($errors, "All fields are required");
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }

    // Check password length
    if (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long");
    }

    // Check if email already exists in the database
    require_once "database.php"; // Make sure to include this file if not included before
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $rowCount = mysqli_num_rows($result);

        if ($rowCount > 0) {
            array_push($errors, "Email already exists");
        }

        mysqli_stmt_close($stmt);
    }

    // Display errors if any
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
        // If no errors, proceed with database insertion
        $sql = "INSERT INTO users (name,lastname,email,password) VALUES (?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);

        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $password_hash);
            mysqli_stmt_execute($stmt);
            echo "You have registered successfully";
        } else {
            echo "Something went wrong";
        }

        mysqli_stmt_close($stmt);
    }

    mysqli_close($conn);
}
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
        // Display errors if any
        if (isset($errors) && count($errors) > 0) {
            echo "<div class='error-container'>";
            foreach ($errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
            echo "</div>";
        }
        ?>
        <form method="post" action="registration.php">
           

            <fieldset>
                <label for="first-name">Enter Your First Name: <input id="first-name" name="first_name" type="text" placeholder="e.g. Bardha" /></label>
                <label for="last-name">Enter Your Last Name: <input id="last-name" name="last_name" type="text" placeholder="e.g. Dema" /></label>
                <label for="email">Enter Your Email: <input id="email" name="email" type="email" placeholder="e.g. bardha123@gmail.com" required /></label>
                <label for="new-password">Create a New Password: <input id="new-password" name="new_password" type="password" placeholder="e.g. Aacwq!2f" /></label>
            </fieldset>
            <label for="terms-and-conditions">
                <input class="inline" id="terms-and-conditions" type="checkbox" required name="terms_and_conditions" /> I accept the <a href="https://www.bing.com/ck/a?!&&p=8469bd8285b19b29JmltdHM9MTcwMDk1NjgwMCZpZ3VpZD0wOTY3MTRkYi0wMzczLTZmMzAtMmNkMS0wNjMzMDIxODZlODYmaW5zaWQ9NTMwNg&ptn=3&ver=2&hsh=3&fclid=096714db-0373-6f30-2cd1-063302186e86&psq=rregullat+e+faqeve&u=a1aHR0cHM6Ly93d3cub3NjZS5vcmcvc3Evbm9kZS8yMjc4MDE&ntb=1">terms and conditions</a>
            </label>
            <input type="submit" name="submit" value="Submit" />
        </form>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (event) {

        // validimi emrit
        const firstName = document.getElementById("first-name").value.trim();
        if (!firstName) {
            alert("Please enter your first name.");
            event.preventDefault();
            return;
        }

        // validimi mbiemrit
        const lastName = document.getElementById("last-name").value.trim();
        if (!lastName) {
            alert("Please enter your last name.");
            event.preventDefault();
            return;
        }

        // validimi emailit
        const email = document.getElementById("email").value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Please enter a valid email address.");
            event.preventDefault();
            return;
        }

        // validimi passit
        const password = document.getElementById("new-password").value;
        const passwordRegex = /[a-z0-9]{8,}/;
        if (!passwordRegex.test(password)) {
            alert("Please enter a valid password with at least 8 characters.");
            event.preventDefault();
            return;
        }

        // validimi terms and conditions/ e kqyr checkboxin a o checked
        const termsCheckbox = document.getElementById("terms-and-conditions");
        if (!termsCheckbox.checked) {
            alert("Please accept the terms and conditions.");
            event.preventDefault();
            return;
        }
    });
});

        </script>
    </body>
    </html>
