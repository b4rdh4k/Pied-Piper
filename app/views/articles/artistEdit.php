<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artist</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/createArtist.css">
</head>

<body>
    <form method="POST" action="<?= ROOT ?>/artists/edit/<?= $artist->id ?>" id="artistForm">
        <h1>Editing Artist: <?= $artist->artist_name ?></h1>
        <br>
        <label for="artistName">Artist Name:</label>
        <input type="text" id="artistName" value="<?= $artist->artist_name ?>" name="artistName">

        <label for="genre">Genre:</label>
        <input type="text" id="genre" value="<?= $artist->genre ?>" name="genre">

        <label for="label">Label:</label>
        <input type="text" id="label" value="<?= $artist->label ?>" name="label">

        <label for="artistImage">Artist Image URL:</label>
        <input type="text" id="artistImage" value="<?= $artist->artist_image ?>" name="artistImage">

        <!-- Review Section -->
        <h2>Reviews</h2>

        <div id="reviewsContainer">
            <div class="review">
                <label for="reviewDate">Review Date:</label>
                <input type="date" class="reviewDate" value="<?= $artist->review_date ?>" name="reviewDate">

                <label for="reviewContent">Review Content:</label>
                <textarea class="reviewContent" name="reviewContent"><?= $artist->review_content ?></textarea>
            </div>
        </div>

        <button type="submit">Edit</button>
    </form>
</body>

</html>