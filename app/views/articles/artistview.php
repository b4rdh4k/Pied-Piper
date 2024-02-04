<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pied Piper - Articles</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/artist.css">
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
            <img src="<?= ROOT ?>/assets/img/logo.png" class="logo">
            <nav>
                <ul>
                    <li><a href="<?php echo ROOT ?>/home/index">Home</a></li>
                    <li><a href="<?php echo ROOT ?>/quiz">Quiz</a></li>
                    <li><a href="<?php echo ROOT ?>/articles/index">Articles</a></li>
                    <li><a href="<?php echo ROOT ?>/contact">Contact</a></li>
                </ul>
            </nav>
            <div class="dropdown">
                <img src="<?= ROOT ?>/assets/img/menu.png" class="menu-icon" alt="drop-down menu">
                <div class="dropdown-content">
                    <a href="<?php echo ROOT ?>/users/logIn">Log In</a>
                    <a href="<?php echo ROOT ?>/users/logout">Log out</a>
                      
                </div>
            </div>
        </div>

        <div class="content">
            
            <div class="album-review">
                <div class="review-header">
                    <img src="<?= ROOT ?>/assets/img/<?= $artist->artist_image ?>" alt="Album Cover" class="album-cover">
                </div>
        
                
                <div class="review-content">
                    <p><?= $artist->artist_name ?></p>
                    
                    <?php if(isset($_SESSION['grouptype']) && $_SESSION['grouptype'] == 0) : ?>
                    <a href="<?= ROOT ?>/artists/edit/<?= $artist->id ?>"><button style="color:beige;width: fit-content; border-radius: 2px;background-color: rgba(36, 0, 70, 0.2); padding: 5px;
    box-shadow: 0px 0px 20px rgba(231, 198, 255, 0.5);">EDIT</button></a>
                    <?php endif; ?>

                    <?php if(isset($_SESSION['grouptype']) && $_SESSION['grouptype'] == 0) : ?>
                    <a href="<?= ROOT ?>/artists/delete/<?= $artist->id ?>"><button style="color:beige;width: fit-content; border-radius: 2px;background-color: rgba(36, 0, 70, 0.2); padding: 5px;
                    box-shadow: 0px 0px 20px rgba(231, 198, 255, 0.5);">DELETE</button></a>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="detailed-review">

                <div class="additional-info">
                    <p>Genre: <?= $artist->genre ?></p>
                    <p>Date Reviewed: <?= $artist->review_date ?></p>
                    <p>Label: <?= $artist->label ?>
                    </p>
                </div>

                <h2>Review</h2>

                <div class="starz-review">
                    <p><?= $artist->review_content ?></p>
                </div>
                
                
            </div>
        </div>
            
        </div>
    </div>
</body>
</html>
