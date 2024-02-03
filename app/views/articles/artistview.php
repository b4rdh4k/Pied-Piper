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
                    <li><a href="../../index.php">Home</a></li>
                    <li><a href="../../quiz/quiz.php">Quiz</a></li>
                    <li><a href="../../articles/articles.php">Articles</a></li>
                </ul>
            </nav>
            <div class="dropdown">
                <img src="<?= ROOT ?>/assets/img/menu.png" class="menu-icon" alt="drop-down menu">
                <div class="dropdown-content">
                    <a href="../../login/login.php">Log In</a>
                    <a href="../../form/form.php">Sign up</a>      
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
                    <h3><a href="<?= ROOT ?>/artists/edit/<?= $artist->id ?>">EDIT</a></h3>
                    <h3><a href="<?= ROOT ?>/artists/delete/<?= $artist->id ?>">DELETE</a></h3>
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
