<?php
// Start the session
session_start();

// Include the database connection file
include 'db.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user ID from the session
    $userID = $_SESSION['userID'];

    // Get the post content from the form
    $postContent = $_POST['post_content'];

    // Validate the post content 
    if (empty($postContent)) {
        echo "Post content cannot be empty.";

        //redirect script
        echo "<p>You will be redirected in 3 seconds</p>";
        echo "<script>";
        echo "var timer = setTimeout(function() { window.location='http://socialsync.com/site.php' }, 3000);";
        echo "</script>";
    } else {
        // Insert the post into the database
        $insertQuery = "INSERT INTO socialsync.Post (UserID, Content, PostDate, Likes) 
                        VALUES ('$userID', '$postContent', NOW(), 0)";

        // Execute the query
        $result = $conn->query($insertQuery);

        if ($result) {
            echo "Post successfully created!";
            
            //redirect back to the site
            header("Location: /site.php");
            exit();
        } else {
            echo "Error creating post: " . $conn->error;

            //redirect script
            echo "<p>You will be redirected in 3 seconds</p>";
            echo "<script>";
            echo "var timer = setTimeout(function() { window.location='http://socialsync.com/site.php' }, 3000);";
            echo "</script>";
        }
    }
} else {
    header("Location: /site.php");
    exit();
}
?>
