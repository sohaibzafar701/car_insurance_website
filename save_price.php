<?php
// Replace with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect("localhost", "root", "", "test");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate and sanitize the input
if (isset($_POST['boughtprice'])) {
    $boughtprice = floatval($_POST['boughtprice']); // Convert to float
    if ($boughtprice <= 0) {
        die("Invalid price value");
    }
} else {
    die("Price not specified");
}

// Insert the bought price into the pricecal table
$sql = "UPDATE pricecal SET boughtprice = $boughtprice ORDER BY id DESC LIMIT 1";
if ($conn->query($sql) === TRUE) {
    // update the price column of table users of the last row
    $sql = "UPDATE users SET price = '$boughtprice' WHERE id = (SELECT MAX(id) FROM users)";
    mysqli_query($conn, $sql);
    // echo "Price saved successfully";
} else {
    echo "Error updating price: " . $conn->error;
}



// header("Location: pricing.php");
$conn->close();
?>

<html>
  <head>
  <title>Pricings</title>
    <style>
      h1{
    font-family: 'Open Sans', sans-serif;
  font-size: 38px;
  padding: 0 150px;
  text-align: center;
}

.link-container {
  text-align: center;
}

.link-container a {
  display: inline-block;
  margin: 10px;
  padding: 10px;
  font-size: 16px;
  color: #fff;
  background-color: #333;
  border-radius: 5px;
  text-decoration: none;
}

.link-container a:hover {
  background-color: #666;
}

    </style>
  </head>
  <body>
  <br><br><br><br><br><br><br><h1>Purchase Succeeded!</h1><br>
  <div class="link-container">
  <a href="reviewsm.php">WRITE A REVIEW</a>
  <a href="home_in.html">GO TO HOME PAGE</a>
</div>
