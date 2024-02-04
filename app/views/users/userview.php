<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/users.css">
</head>
<body>
    <h2>User List</h2>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?php echo $user['email']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>