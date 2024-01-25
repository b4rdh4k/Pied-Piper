<?php

require_once "Database.php";

class UserLogin {
    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function loginUser($email, $password) {
        $conn = $this->database->getConnection();

        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format";
        }

        // Prepare and execute the SQL query
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            // Fetch user data
            $user = $result->fetch_assoc();

            if ($user) {
                // Check password
                if (password_verify($password, $user["password"])) {
                    // Start session and store user information
                    session_start();
                    $_SESSION["user"] = $user;

                    // Redirect to index.php on success
                    header("Location: index.php");
                    exit();
                } else {
                    return "Password does not match";
                }
            } else {
                return "Email does not exist";
            }
        } else {
            return "Error in preparing the SQL statement";
        }
    }
}

?>
