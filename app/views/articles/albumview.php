<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pied Piper - Articles</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/albums.css">
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
                    <li><a href="<?php echo ROOT ?>/home">Home</a></li>
                    <li><a href="<?php echo ROOT ?>/quiz">Quiz</a></li>
                    <li><a href="<?php echo ROOT ?>/about">About</a></li>
                    <li><a href="<?php echo ROOT ?>/articles">Articles</a></li>
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

        <div class="content">

            <div class="album-review">
                <div class="review-header">
                    <img src="<?= ROOT ?>/assets/img/<?= $album_reviews->albumimage ?>" alt="Album Cover" class="album-cover">
                    <div class="info">
                        <p><?= $album_reviews->artist ?></p>
                        <h3><?= $album_reviews->album_title ?></h3>
                        <p><?= $album_reviews->rating ?></p>
                    </div>
                </div>


                <div class="review-content">
                    <p><?= $album_reviews->brief_review ?></p>
                    <div>
                        <?php if (isset($_SESSION['grouptype']) && $_SESSION['grouptype'] == 0) : ?>
                            <a href="<?= ROOT ?>/albums/edit/<?= $album_reviews->id ?>"><button style="color:beige; width: fit-content; border-radius: 2px;background-color: rgba(36, 0, 70, 0.2); padding: 5px; margin-top:5px;">EDIT</button></a>
                            <a href="<?= ROOT ?>/albums/delete/<?= $album_reviews->id ?>"><button style="color:beige; width: fit-content; border-radius: 2px;background-color: rgba(36, 0, 70, 0.2); padding: 5px; margin-top:5px;">DELETE</button></a>
                        <?php endif; ?>
                    </div>

                </div>
            </div>

            <div class="detailed-review">

                <div class="additional-info">
                    <p>Genre: <?= $album_reviews->genre ?></p>
                    <p>Date Reviewed: <?= $album_reviews->date_reviewed ?></p>
                    <p>Label: <?= $album_reviews->label ?>
                </div>

                <h2>Review</h2>

                <div class="starz-review">
                    <p><?= $album_reviews->detailed_review ?></p>
                </div>
            </div>
        </div>
        <script src="/public/assets/js/albumet.js"></script>
</body>

</html>