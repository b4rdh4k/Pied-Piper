<?php
session_start();

class Connection{
    public $host = "hostname";
    public $user = "root";
    public $password = "";
    public $db_name = "oopreglog";

}
function getTotalUsers($conn) {
    $result = $conn->query("SELECT COUNT(*) AS total_users FROM users");
    $row = $result->fetch_assoc();
    return $row['total_users'];
}

function getTotalArticles($conn) {
    $result = $conn->query("SELECT COUNT(*) AS total_articles FROM articles");
    $row = $result->fetch_assoc();
    return $row['total_articles'];
}

function getTotalAlbums($conn) {
    $result = $conn->query("SELECT COUNT(*) AS total_albums FROM albums");
    $row = $result->fetch_assoc();
    return $row['total_albums'];
}

function getRecentActivities($conn) {
    $result = $conn->query("SELECT * FROM activities ORDER BY timestamp DESC LIMIT 5");
    $activities = [];

    while ($row = $result->fetch_assoc()) {
        $activities[] = $row;
    }

    return $activities;
}
?>
