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
    <a href="site.php" class="logo-nav">
        <img src="./assets/SocialSync-Icon.png" class="logo-nav">
        <img src="./assets/SocialSync-Text.png" class="logo-nav">
    </a>
    <a href="profile.php" class="nav-profile">
        <?php
            echo '<img src="./assets/user/' . $_SESSION['pfp'] . '" alt="Profile Picture" class="profile-image large">';
        ?>
    </a>
</div>

<!-- Create Posts Form -->
<div class="post-container">
    <div class="post">
        <form action="/back-end/create-post.php" method="post" class="post-form">
            <div class="post-content" style="border-radius: 20px 20px 20px 20px;">
                <textarea name="post_content" placeholder="What's on your mind?"></textarea>
            </div>
            <div class="post-footer">
                <input type="submit" value="Make Post" class="post-btn">
            </div>
        </form>
    </div>
</div>

<!-- Get posts -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/back-end/get-posts.php'); ?>

</body>
</html>
