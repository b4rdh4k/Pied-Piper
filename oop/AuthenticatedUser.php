<?php

class AuthenticatedUser {
    public function __construct() {
        // Check if a session is already active before starting a new one
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function isLoggedIn() {
            return isset($_SESSION["user"]) && $_SESSION["user"]["registered"] === true;
    }

    public function logout() {
        // Unset all session variables
        $_SESSION = array();

        // Destroy the session cookie
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }

        // Destroy the session
        session_destroy();

        // Redirect to login.php
        header("Location: Login.php");
        exit();
    }
}

?>
