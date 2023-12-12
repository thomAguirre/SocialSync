<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialSync | Profile</title>
    <!-- Add your CSS stylesheets here -->
    <link rel="stylesheet" href="./site.css">
    </style>
</head>
<body>

<div class="navbar">
    <img src="./assets/SocialSync-Icon.png" class="logo">
    <img src="./assets/SocialSync-Text.png" class="logo">

    <div class="profile-icon">
        <a href="site.php">Feed</a>
    </div>
</div>

<div class="profile-container">
    <!-- Get user info -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/back-end/get-user-info.php'); ?>

    <!-- Logout button -->
    <a href="/back-end/logout.php">Logout</a>
</div>

<h2>User's Posts</h2>
<?php
    $calluser = $_SESSION['userID'];
    include($_SERVER['DOCUMENT_ROOT'].'/back-end/get-posts.php'); 
?>

</body>
</html>
