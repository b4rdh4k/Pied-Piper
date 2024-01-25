<?php

require_once "Database.php"; // Include the Database class definition

class UserRegistration {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function registerUser($firstname, $lastname, $email, $password, $role = 'user') {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $errors = array();

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
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->db->prepareStatement($sql);

        if ($stmt) {
            $this->db->bindParams($stmt, "s", $email);
            $this->db->executeStatement($stmt);

            $result = $stmt->get_result();
            $rowCount = $result->num_rows;

            if ($rowCount > 0) {
                array_push($errors, "Email already exists");
            }

            $stmt->close();
        }

        // Display errors if any
        if (count($errors) > 0) {
            return $errors;
        } else {
            // If no errors, proceed with database insertion
            $sql = "INSERT INTO users (firstname, lastname, email, password, role) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->db->prepareStatement($sql);

            if ($stmt) {
                $this->db->bindParams($stmt, "sssss", $firstname, $lastname, $email, $password_hash, $role);
                $this->db->executeStatement($stmt);
                $stmt->close();

                return "You have registered successfully";
            } else {
                return "Something went wrong";
            }
        }
    }
}

?>
