<?php

class UserLogout {
    public function logout() {
        session_destroy();

        // Redirect to login.php
        header("Location: Login.php");
        exit();
    }
}


?>
