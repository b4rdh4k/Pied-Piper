<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pied Piper</title>
        <link rel="stylesheet" href="<?php echo ROOT?>/assets/css/about.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <!--fonti i H1-welcome to Pied Piper-->
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
                        <li><a href="<?php echo ROOT ?>/articles/index">Articles</a></li>
                        <li><a href="<?php echo ROOT ?>/contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="dropdown">
                    <img src="<?php echo ROOT ?>/assets/img/menu.png" class="menu-icon" alt="drop-down menu">
                    <div class="dropdown-content">
                        <a href="<?php echo ROOT ?>/users/logIn">Log In</a>
                        <a href="<?php echo ROOT ?>/users/logout">Log out</a>                     
                    </div>
                </div>
        </div>
        
        <div class="col">
    <?php
    
    foreach ($data['about'] as $aboutItem) :
    ?>
        <div class="card">
            <h2><?= $aboutItem->name ?></h2>
            <p>
                <strong>Title/Role:</strong> <?= $aboutItem->title_role ?><br>
                <strong>Introduction:</strong> <?= $aboutItem->introduction ?><br>
                <strong>Background:</strong> <?= $aboutItem->background ?><br>
                <strong>Mission:</strong> <?= $aboutItem->mission ?><br>
                <strong>What Sets Us Apart:</strong> <?= $aboutItem->sets_apart ?><br>
                <strong>Passions:</strong> <?= $aboutItem->passions ?>
            </p>
        </div>
    <?php endforeach; ?>
</div>
        </div>
    </body>
</html>
