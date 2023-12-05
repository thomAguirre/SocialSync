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

<div class="navbar">
    <h1>Your Social Media</h1>

    <div class="profile-icon">
        <a href="profile.html">Profile</a>
    </div>
</div>

<div class="post-container">
    <div class="post-form">
        <textarea placeholder="What's on your mind?" rows="4" cols="50"></textarea>
        <button class="post-btn">Post</button>
    </div>

    <div class="post">
        <p>This is a sample post. Your text goes here.</p>
    </div>

    <!-- Add more posts dynamically based on your backend data -->
</div>

</body>
</html>
