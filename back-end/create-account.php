<?php
  // Include the database connection file
  include 'db.php';

  // Check if the form is submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get the user values
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $loc = $_POST['loc'];

    // Insert the new user into the database
    $insertQuery = "INSERT INTO socialsync.User (Username, Password, Email, FirstName, LastName, DOB, Location, PFP, Bio, Registered) 
                    VALUES ('$uname', '$pass', '$email', '$fname', '$lname', STR_TO_DATE('$dob','%m-%d-%Y'), '$loc', 'Default.png', 'Sample Bio', CURDATE())";

    // Execute the query
    $result = $conn->query($insertQuery);

    if ($result) {
      echo "Account successfully created! Please log in with your new account.";
          
      //redirect back to the login
      //redirect script
      echo "<p>You will be redirected in 3 seconds</p>";
      echo "<script>";
      echo "var timer = setTimeout(function() { window.location='http://socialsync.com/login.html' }, 3000);";
      echo "</script>";
    } else {
      echo "Error creating user: " . $conn->error;

      //redirect script
      echo "<p>You will be redirected in 3 seconds</p>";
      echo "<script>";
      echo "var timer = setTimeout(function() { window.location='http://socialsync.com/create-account.html' }, 5000);";
      echo "</script>";
    }
  } else {
    header("Location: /site.php");
    exit();
  }
?>