<?php
  // Connect to the database
  $conn = mysqli_connect("localhost", "root", "", "test");
 
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  // Get the ID of the user to remove
  $id = $_GET["id"];
  // Remove the user
  $sql = "DELETE FROM users WHERE id=$id";
  if (mysqli_query($conn, $sql)) {
    // Remove the quotes for the user
    $sql_yourcover = "DELETE FROM yourcover WHERE id=$id";
    if (mysqli_query($conn, $sql_yourcover)) {
      header("Location: admin.php");
    } else {
      echo "Error deleting quotes: " . mysqli_error($conn);
    }
  } else {
    echo "Error deleting user: " . mysqli_error($conn);
  }
  // Close the connection
  mysqli_close($conn);
?>
