<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Album</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/createAlbum.css">
</head>
<body>
<form method="POST" action="<?= ROOT ?>/albums/edit/<?= $album_reviews->id ?>" id="albumForm">
        <h1>Editing Album: <?= $album_reviews->artist ?></h1>
        <br>
        <label for="artist_name">Artist:</label>
        <input type="text" id="artist_name" name="artist_name" value="<?= $album_reviews->artist ?>">

        <label for="album_title">Album Title:</label>
        <input type="text" id="album_title" name="album_title" value="<?= $album_reviews->album_title ?>">
        
        <label for="rating">Rating:</label>
        <input type="text" id="rating" name="rating" value="<?= $album_reviews->rating ?>">

        <label for="brief_review">Brief Review:</label>
        <textarea id="brief_review" name="brief_review"><?= $album_reviews->brief_review ?></textarea>

        <label for="detailed_review">Detailed Review:</label>
        <textarea id="detailed_review" name="detailed_review"><?= $album_reviews->detailed_review ?></textarea>


        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" value="<?= $album_reviews->genre ?>">

        <label for="date_reviewed">Date Reviewed:</label>
        <input type="text" id="date_reviewed" name="date_reviewed" value="<?= $album_reviews->date_reviewed ?>">
        
        <label for="albumimage">Album Image URL:</label>
        <input type="text" id="albumimage" name="albumimage" value="<?= $album_reviews->albumimage ?>">

        <button type="submit">Create Album</button>
    </form>
</body>
</html>
