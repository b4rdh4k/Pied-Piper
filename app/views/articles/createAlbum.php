

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Album</title>
    <link rel="stylesheet" href="createAlbum.css">
</head>
<body>
    <h1>Create New Album</h1>
    <form action="index.php?controller=album_reviews&action=process" method="post">
        
        <label for="artist_name">Artist:</label>
        <input type="text" id="artist_name" name="artist_name" required>

        <label for="album_title">Album Title:</label>
        <input type="text" id="album_title" name="album_title" required>
        
        <label for="rating">Rating:</label>
        <input type="text" id="rating" name="brief_review" required>

        <label for="brief_review">Brief Review:</label>
        <textarea id="review" name="brief_review" required></textarea>

        <label for="detailed_review">Detailed Review:</label>
        <textarea id="review" name="detailed_review" required></textarea>


        <label for="genre">Genre:</label>
        <input type="text" id="review" name="genre" required>

        <label for="date_reviewed">Date Reviewed:</label>
        <input type="text" id="review" name="date_reviewed" required>
        
        <label for="albumimage">Album Image URL:</label>
        <input type="text" id="albumimage" name="albumimage" required>

        <button type="submit">Create Album</button>
    </form>
</body>
</html>
