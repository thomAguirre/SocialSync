<?php
//Start Session
session_start();

// Include the database connection file
include($_SERVER['DOCUMENT_ROOT'].'/back-end/db.php');

// Select the logged in user's info 
$selectQuery = "SELECT Username, Email, FirstName, LastName, DOB, PFP, Location, Bio
                FROM socialsync.User
                WHERE UserID = {$_SESSION['userID']}";

$result = $conn->query($selectQuery);

// Ensure query succeeded
if ($result->num_rows > 0) {
  //Display User info
  while ($row = $result->fetch_assoc()) {
    echo '<div class="user-info">';
      echo '<img src="' . $row['PFP'] . '" alt="Profile Picture" class="profile-img">';
      echo "<h2>" . $row['Username'] . "</h2>";
      echo "<p>" . $row['Email'] . "</p>";
      echo "<p>" . $row['Location'] . "</p>";
      echo "<p>" . $row['Bio'] . "</p>";
    echo "</div>";
  }
}
else {
    echo "No User found.";
}

// Close the database connection
$conn->close();
?>