<?php
// Include the database connection file
include($_SERVER['DOCUMENT_ROOT'].'/back-end/db.php');

//Check if specific user is desired. Else, fetch all posts
if(isset($calluser)) {
    $selectQuery = "SELECT
                        P.Content, 
                        P.PostDate, 
                        P.Likes, 
                        U.FirstName, 
                        U.LastName 
                    FROM 
                        socialsync.Post P
                    JOIN 
                        socialsync.User U ON P.UserID = U.UserID
                    WHERE P.UserID = $calluser
                    ORDER BY 
                        P.PostDate DESC";
    unset($calluser);
}
else {
    $selectQuery = "SELECT
                        P.Content, 
                        P.PostDate, 
                        P.Likes, 
                        U.FirstName, 
                        U.LastName 
                    FROM 
                        socialsync.Post P
                    JOIN 
                        socialsync.User U ON P.UserID = U.UserID 
                    ORDER BY 
                        P.PostDate DESC";
}

$result = $conn->query($selectQuery);

// Check if there are any posts
if ($result->num_rows > 0) {
    // Fetch and display each post

    echo '<div class="post-container">';
    while ($row = $result->fetch_assoc()) {
        echo '<div class="post">';
        echo "<p>" . $row['FirstName'] . " " . $row['LastName'];
        echo "<p>" . $row['Content'] . "</p>";
        echo "<p>" . $row['PostDate'] . "</p>";
        echo "<p>Likes: " . $row['Likes'] . "</p>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "No posts found.";
}

// Close the database connection
$conn->close();
?>
