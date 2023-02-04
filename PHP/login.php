<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "heart_center";

  // Create a connection to the database
  $conn = mysqli_connect($host, $username, $password, $dbname);

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Escape the input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // Redirect to the dashboard or home page
    } else {
      // Show error message
    }
  }

  // Close the connection
  mysqli_close($conn);
?>