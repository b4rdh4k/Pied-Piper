<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pied Piper</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/about.css">
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
                    <li><a href="">About</a></li>
                    <li><a href="<?php echo ROOT ?>/articles/index">Articles</a></li>
                    <?php if ($_SESSION['grouptype'] == 0) : ?>
                        <li><a href="<?php echo ROOT ?>/dashboard">Dashboard</a></li>
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

        <div class="col">
            <div class="card">
                <h2><?= $data['about'][0]->name ?></h2>
                <p>
                    <strong>Title/Role:</strong> <?= $data['about'][0]->title_role ?><br>
                    <strong>Introduction:</strong> <?= $data['about'][0]->introduction ?><br>
                    <strong>Background:</strong> <?= $data['about'][0]->background ?><br>
                    <strong>Mission:</strong> <?= $data['about'][0]->mission ?><br>
                    <strong>What Sets Us Apart:</strong> <?= $data['about'][0]->sets_apart ?><br>
                    <strong>Passions:</strong> <?= $data['about'][0]->passions ?>
                </p>
            </div>
        </div>
    </div>
    <script src="<?php echo ROOT ?>/assets/js/about.js"></script>
</body>

</html>