<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

include 'AuthenticatedUser.php';
include 'database.php';
include 'function.php';

$user = new AuthenticatedUser();
$db = new Database();

// Check if the user is an admin
if (!$user->isAdmin()) {
    header('Location: index.php'); // Redirect non-admin users
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="logstyle.css">
    <style>
        /* Add specific styles for the admin dashboard content here */
        .dashboard-content {
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .dashboard-content h2 {
            color: #333;
        }

        /* Add more styles based on your preferences */
    </style>
</head>
<body>

<header>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="articles.php">Articles</a>
        <a href="albums.php">Albums</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<main>
    <div class="dashboard-content">
        <h2>Admin Dashboard</h2>

        <!-- Simple dashboard sections -->
        <section>
            <h3>User Statistics</h3>
            <p>Total Registered Users: <?php echo getTotalUsers($db->conn); ?></p>
            <!-- Add more user-related statistics as needed -->
        </section>

        <section>
            <h3>Content Statistics</h3>
            <p>Total Articles: <?php echo getTotalArticles($db->conn); ?></p>
            <p>Total Albums: <?php echo getTotalAlbums($db->conn); ?></p>
            <!-- Add more content-related statistics as needed -->
        </section>

        <section>
            <h3>Recent Activities</h3>
            <ul>
                <?php
                $activities = getRecentActivities($db->conn); // Implement this function
                foreach ($activities as $activity) {
                    echo '<li>' . $activity['description'] . '</li>';
                }
                ?>
            </ul>
        </section>

    </div>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Pied Piper</p>
</footer>

</body>
</html>
