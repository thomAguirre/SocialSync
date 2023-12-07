<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Social Media Feed</title>
    <!-- Add your CSS stylesheets here -->
    <!-- Example: <link rel="stylesheet" href="styles.css"> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            padding: 10px;
            color: #fff;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .post-container {
            margin: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .post-form {
            margin-bottom: 20px;
        }

        .post-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: none;
        }

        .post-btn {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .post-btn:hover {
            background-color: #45a049;
        }

        .post {
            margin-bottom: 20px;
        }

        .post p {
            margin: 0;
        }

        .profile-icon {
            color: #fff;
            margin-left: auto; /* Push the profile icon to the far right */
        }
    </style>
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
    <h1>Your Social Media</h1>

    <div class="profile-icon">
        <a href="profile.html">Profile</a>
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
