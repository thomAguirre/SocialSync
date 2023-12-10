<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialSync | Feed</title>
    <!-- Add your CSS stylesheets here -->
    <link rel="stylesheet" href="./site.css">
</head>
<body>

<?php
session_start();

if (!isset($_SESSION['username'])) {
    // Redirect to the login page if not logged in
    header("Location: /login.html");
    exit();
}
?>

<div class="navbar">
    <img src="./assets/SocialSync-Icon.png" class="logo">
    <img src="./assets/SocialSync-Text.png" class="logo">

    <div class="profile-icon">
        <a href="profile.php">Profile</a>
    </div>
</div>

<div class="post-container">
    <form action="/back-end/create-post.php" method="post">
        <textarea name="post_content" placeholder="What's on your mind?"></textarea>
        <input type="submit" value="Post">
    </form>
</div>

<!-- Get posts -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/back-end/get-posts.php'); ?>

</body>
</html>
