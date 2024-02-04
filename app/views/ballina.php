<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pied Piper</title>
        <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/ballina.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <!--fonti i H1-welcome to Pied Piper-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Foldit&display=swap" rel="stylesheet">
    </head>
    <bodyye>
        <div class="container">
            <div class="navbar">
                <img src="<?php echo ROOT ?>/assets/img/logo.png" class="logo">
                <nav>
                    <ul>
                        <li><a href="<?php echo ROOT ?>/home/index">Home</a></li>
                        <li><a href="<?php echo ROOT?>/quiz">Quiz</a></li>
                        <li><a href="<?php echo ROOT ?>/articles/index">Articles</a></li>
                    </ul>
                </nav>
                <div class="dropdown">
                    <img src="<?php echo ROOT ?>/assets/img/menu.png" class="menu-icon" alt="drop-down menu">
                    <div class="dropdown-content">
                        <a href="<?php echo ROOT ?>/users/login">Log In</a>
                        <a href="<?php echo ROOT ?>/users/signup">Sign up</a>    
                        <a href="<?php echo ROOT ?>/users/logout">Log out</a>                
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h1>Welcome to Pied Piper</h1>
                    <p>Welcome to our music blog where we, Bardha and Bujar, dive into the beats that move us. 
                        Join us on a journey through our favorite artists and genres, as we share our personal insights that make each note a part of something greater. 
                        It's more than a blog; it's a celebration of the magic of music that fills our hearts with song. 
                        Dive into the rhythm with us at Pied Piper, where every post is a symphony of passion and discovery.</p>
                  <a href="<?php echo ROOT ?>/about"><button type="button">Read about us</button></a>
                </div>
                <div class="col">
                    <?php foreach($handpicked as $h) : ?>
                    <a href="<?= ROOT.'/artists/viewArtist/'.$h->id ?>"><div class="card card1">
                       <h5><?= $h->artist_name ?></h5> 
                       <p>Our pick</p>
                    </div></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </body>
</html>