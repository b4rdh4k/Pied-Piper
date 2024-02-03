<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Artist</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/createArtist.css">
</head>
<body>
    <h1>Create New Artist</h1>
    <form action="index.php?controller=artists&action=process" method="post">
        <label for="artist_name">Artist Name:</label>
        <input type="text" id="artist_name" name="artist_name" required>
        
        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" required>
        
        <label for="artist_image">Artist Image URL:</label>
        <input type="text" id="artist_image" name="artist_image" required>
        
        <label for="review_content">Review Content:</label>
        <textarea id="review_content" name="review_content" required></textarea>

        <button type="submit">Create Artist</button>
    </form>
</body>
</html>
