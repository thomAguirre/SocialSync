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
                        U.LastName, 
                        U.PFP
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
                        U.LastName,
                        U.PFP 
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
        //post container
        echo '<div class="post">';

        //post heading
        echo '<div class="post-heading">';
        //profile picture
        echo '<img src="./assets/user/' . $row['PFP'] . '" alt="Profile Picture" class="profile-image small">';
        //user's name
        echo "<p>" . $row['FirstName'] . " " . $row['LastName'];
        //datetime
        echo '<div class="post-date">';
        echo "<p>" . $row['PostDate'] . "</p>";
        echo "</div>";
        echo "</div>";

        //content
        echo '<div class="post-content">';
        echo "<p>" . $row['Content'] . "</p>";
        echo "</div>";

        //footer/likes
        echo '<div class="post-footer">';
        echo "<p>Likes: " . $row['Likes'] . "</p>";
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "No posts found.";
}

// Close the database connection
$conn->close();
?>
