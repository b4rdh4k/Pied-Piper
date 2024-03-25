<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboards</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/users.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Foldit&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="<?php echo ROOT ?>/assets/img/logo.png" class="logo">
            <nav>
                <ul>

                    <li><a href="<?php echo ROOT ?>/home/index">Home</a></li>
                    <li><a href="<?php echo ROOT ?>/quiz">Quiz</a></li>
                    <li><a href="<?php echo ROOT ?>/about">About</a></li>
                    <li><a href="<?php echo ROOT ?>/articles/index">Articles</a></li>
                    <?php if ($_SESSION['grouptype'] == 0) : ?>
                        <li><a href="">Dashboard</a></li>
                    <?php endif; ?>
                    <?php if ($_SESSION['grouptype'] == 1) : ?>
                        <li><a href="<?php echo ROOT ?>/contact">Contact</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
            <div class="dropdown">
                <img src="<?php echo ROOT ?>/assets/img/menu.png" class="menu-icon" alt="drop-down menu">
                <div class="dropdown-content">
                    <a href="<?php echo ROOT ?>/users/logout">Log out</a>
                </div>
            </div>
        </div>
        <hr>
        <main>
            <!-- Grid for dashboard -->
            <div class="grid-container">
                <div class="grid-item">
                    <h2>Users</h2>
                    <p id="usersCount" class="count"><?php echo $usersCount; ?></p>
                </div>
                <div class="grid-item">
                    <h2>Artists</h2>
                    <p id="artistCount" class="count"><?php echo $artistsCount; ?></p>
                    <a href="<?= ROOT ?>/artists/create"><button class="add-button">ADD ARTIST</button></a>
                </div>
                <div class="grid-item">
                    <h2>Albums</h2>
                    <p id="albumCount" class="count"><?php echo $albumsCount; ?></p>
                    <a href="<?= ROOT ?>/albums/create"><button class="add-button">ADD ALBUM</button></a>
                </div>
            </div>
            <hr class="hr">
            <!-- Message section -->
            <h2 class="message-section-header">Messages</h2>
            <div class="message-section" id="messageSection">
                <?php foreach ($messages as $message) : ?>
                    <div class="message">
                        <p>Name: <?php echo $message->sender_name; ?></p>
                        <p>Email: <?php echo $message->sender_email; ?></p>
                        <p>Message: <?php echo $message->message_text; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>
</body>

</html>