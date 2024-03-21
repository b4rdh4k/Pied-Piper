<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pied Piper - Articles</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/articles.css">
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
                    <li><a href="">Articles</a></li>
                    <?php if($_SESSION['grouptype'] == 0) : ?>
                    <li><a href="<?php echo ROOT ?>/users/userview">Users</a></li>
                    <?php endif; ?>
                    <?php if($_SESSION['grouptype'] == 1) : ?>
                    <li><a href="<?php echo ROOT ?>/contact">Contact</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
            <div class="dropdown">
                <img src="<?php echo ROOT ?>/assets/img/menu.png" class="menu-icon" alt="drop-down menu">
                <div class="dropdown-content">
                    <a href="<?php echo ROOT ?>/users/login">Log In</a>
                    <a href="<?php echo ROOT ?>/users/logout">Log out</a>    
                </div>
            </div>
      </div>

      <div class="artists-section">
            <h2>Featured Artists</h2>
            <?php foreach($artist as $a) : ?>
                <div class="artist">
                    <a href="<?= ROOT ?>/artists/viewArtist/<?= $a->id ?>"><img src="<?php echo ROOT ?>/assets/img/<?= $a->artist_image ?>" alt="Artist 1"></a>
                    <p><?= $a->artist_name ?></p>
                </div>
            <?php endforeach; ?>
            <?php if($_SESSION['grouptype'] == 0) : ?>
                <a href="<?= ROOT ?>/artists/create"><button style="color:beige;width: fit-content; border-radius: 10px;background-color: rgba(36, 0, 70, 0.2); padding: 10px;
        box-shadow: 0px 0px 20px rgba(231, 198, 255, 0.5);">ADD ARTIST</button></a>
            <?php endif; ?>
        </div>
        <br>

        <p class="checkout">Check out these articles!</p>
        <div class="row">
                <?php foreach($album_reviews as $alb) : ?>
                    <div class="artikulli">
                        <a href="<?= ROOT ?>/albums/viewAlbum/<?= $alb->id ?>"><img src="<?php echo ROOT ?>/assets/img/<?= $alb->albumimage ?>" alt="Album 1">
s                            <p><?= $alb->artist ?>:
                            <?=  $alb->album_title ?><p>
                        </a>
                    </div>
                <?php endforeach; ?>
                <?php if(isset($_SESSION['grouptype']) && $_SESSION['grouptype'] == 0) : ?>
                <a href="<?= ROOT ?>/albums/create"><button style="color:beige;width: fit-content; border-radius: 10px;background-color: rgba(36, 0, 70, 0.2); padding: 10px;
        box-shadow: 0px 0px 20px rgba(231, 198, 255, 0.5);">ADD ALBUM</button></a>
            <?php endif; ?>
        </div>
        
        
    </div>
</body>
</html>