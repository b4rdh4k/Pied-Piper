<?php

class Database {
    private $hostname;
    private $dbuser;
    private $dbpassword;
    private $dbname;
    private $conn;

    public function __construct($hostname, $dbuser, $dbpassword, $dbname) {
        $this->hostname = $hostname;
        $this->dbuser = $dbuser;
        $this->dbpassword = $dbpassword;
        $this->dbname = $dbname;
        $this->connect();
    }

    private function connect() {
        $this->conn = mysqli_connect($this->hostname, $this->dbuser, $this->dbpassword, $this->dbname);

        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function prepareStatement($sql) {
        return $this->conn->prepare($sql);
    }

    public function bindParams($stmt, $types, ...$params) {
        $stmt->bind_param($types, ...$params);
    }

    public function executeStatement($stmt) {
        $stmt->execute();
        return $stmt->get_result();
    }

    public function closeConnection() {
        $this->conn->close();
    }
}

// Usage example:
$database = new Database("localhost", "root", "", "oopregister");
$conn = $database->getConnection();

// Now $conn holds the database connection, and you can use it for further operations.
?>
