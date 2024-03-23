<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Artist</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/createArtist.css">
</head>
<body>
    <form method="POST" action="" id="artistForm">
        <h1>Create New Artist</h1>
        <br>
        <label for="artistName">Artist Name:</label>
        <input type="text" id="artistName" name="artistName" required>

        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" required>

        <label for="label">Label:</label>
        <input type="text" id="label" name="label" required>

        <label for="artistImage">Artist Image URL:</label>
        <input type="text" id="artistImage" name="artistImage" required>

        <!-- Review Section -->
        <h2>Reviews</h2>

        <div id="reviewsContainer">
            <div class="review">
                <label for="reviewDate">Review Date:</label>
                <input type="date" class="reviewDate" name="reviewDate" required>

                <label for="reviewContent">Review Content:</label>
                <textarea class="reviewContent" name="reviewContent" required></textarea>
            </div>
        </div>

        <button type="submit">Create</button>
    </form>
</body>
</html>
