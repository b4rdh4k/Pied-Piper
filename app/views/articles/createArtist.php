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
        <input type="text" id="artistName" name="artistName">

        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre">

        <label for="label">Label:</label>
        <input type="text" id="label" name="label">

        <label for="artistImage">Artist Image URL:</label>
        <input type="text" id="artistImage" name="artistImage">

        <!-- Review Section -->
        <h2>Reviews</h2>

        <div id="reviewsContainer">
            <div class="review">
                <label for="reviewDate">Review Date:</label>
                <input type="date" class="reviewDate" name="reviewDate">

                <label for="reviewContent">Review Content:</label>
                <textarea class="reviewContent" name="reviewContent"></textarea>
            </div>
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
