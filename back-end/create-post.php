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
        // You might want to redirect the user back to the form or handle the error appropriately
    } else {
        // Insert the post into the database
        $insertQuery = "INSERT INTO socialsync.Post (UserID, Content, PostDate, Likes) 
                        VALUES ('$userID', '$postContent', CURDATE(), 0)";

        // Execute the query
        $result = $conn->query($insertQuery);

        if ($result) {
            echo "Post successfully created!";
            // You might want to redirect the user to a success page or display a success message
        } else {
            echo "Error creating post: " . $conn->error;
            // You might want to redirect the user back to the form or handle the error appropriately
        }
    }
} else {
    // If the form is not submitted, you can handle it accordingly
    // For example, redirect the user back to the form
    header("Location: /site.php");
    exit();
}
?>
