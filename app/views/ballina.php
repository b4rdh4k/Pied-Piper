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
        <!--slider here-->
        <div class="slider-container">
            <h1>Welcome to Pied Piper</h1>
            <div class="slider">
                <img id="slideshow" src="<?= ROOT ?>/assets/img/" alt="Slider Image">
                <p>This is a blog about our taste in music and art. In this website you can find articles about different genres of music, artists, and albums.
                    If you would like for your art to be featured on our website, please contact us.
                    However, if you are just interested in learning more about our opinions,
                    or having a little bit of fun, please navigate through our navbar.</p>
            </div>
            <button class="next-btn" onclick="changeImg()">Next</button>
        </div>


    </div>
    <script>
        let i = 0;
        let imgArray = [<?php foreach ($sliderImages as $k => $s) {
                            echo '"' . $s->albumimage . '"';
                            if ($k != sizeof($sliderImages) - 1) {
                                echo ",";
                            }
                        } ?>];

        function changeImg() {
            document.getElementById('slideshow').src = "<?php echo ROOT ?>/assets/img/" + imgArray[i];

            if (i < imgArray.length - 1) {
                i++;
            } else {
                i = 0;
            }
            //setTimeout("changeImg()", 2600);
        }
        document.addEventListener(onload, changeImg());
    </script>
</body>

</html>