<?php
//Start Session
session_start();

// Include the database connection file
include($_SERVER['DOCUMENT_ROOT'].'/back-end/db.php');

//Check desired user
if(isset($_GET['user'])){
  $uid = $_GET['user'];
}
else {
  $uid = $_SESSION['userID'];
}

// Select the user's info 
$selectQuery = "SELECT Username, Email, FirstName, LastName, DOB, PFP, Location, Bio, Skill1, Skill2, Skill3, Trait1, Trait2, Trait3, Goal1, Goal2
                FROM socialsync.User
                WHERE UserID = $uid";

$result = $conn->query($selectQuery);

// Ensure query succeeded
if ($result->num_rows > 0) {
  //get User info
  while ($row = $result->fetch_assoc()) {
    $pfp = $row['PFP'];
    $Username = $row['Username'];
    $Email = $row['Email'];
    $Location = $row['Location'];
    $Bio = $row['Bio'];
    $Fname = $row['FirstName'];
    $Lname = $row['LastName'];
    $DOB = $row['DOB'];
    $Skill1 = $row['Skill1'];
    $Skill2 = $row['Skill2'];
    $Skill3 = $row['Skill3'];
    $Trait1 = $row['Trait1'];
    $Trait2 = $row['Trait2'];
    $Trait3 = $row['Trait3'];
    $Goal1 = $row['Goal1'];
    $Goal2 = $row['Goal2'];
  }
}
else {
    echo "No User found.";
}

// Close the database connection
$conn->close();
?>