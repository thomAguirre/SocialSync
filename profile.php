<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialSync | Profile</title>
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

        .profile-container {
            margin: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-img {
            max-width: 150px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .user-info {
            text-align: center;
            margin-bottom: 20px;
        }

        .user-info h2 {
            color: #333;
        }

        .post {
            margin-bottom: 20px;
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
        }

        .post p {
            margin: 0;
        }

        .return-feed {
            color: #fff;
            margin-left: auto; /* Push the feed to the far right */
        }
    </style>
</head>
<body>

<div class="navbar">
    <h1>Your Social Media</h1>

    <div class="return-feed">
        <a href="/site.php">Back to your feed</a>
    </div>
</div>

<div class="profile-container">
    <!-- Get user info -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/back-end/get-user-info.php'); ?>

    <!-- Logout button -->
    <a href="/back-end/logout.php">Logout</a>

    <h2>User's Posts</h2>
    <?php
        $calluser = $_SESSION['userID'];
        include($_SERVER['DOCUMENT_ROOT'].'/back-end/get-posts.php'); 
    ?>

</div>

</body>
</html>