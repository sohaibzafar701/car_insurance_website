<?php

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "test");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the last row of the 'fname' column in the 'about' table
$sql = "SELECT fname FROM about ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

// Check if data was retrieved successfully
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $buyername = $row["fname"];

    // Process the form data when submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $review = $_POST["review"];
        $rating = $_POST["rating"];

        // Insert the review, rating, and buyer name into the database
        $sql = "INSERT INTO user_reviews (review, rating, buyername) VALUES ('$review', '$rating', '$buyername')";
        if (mysqli_query($conn, $sql)) {
            // echo "Review added successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
} else {
    echo "Error: Could not retrieve data from the 'about' table.<br>";

}
// header("Location: home_in.html");

// Close database connection
mysqli_close($conn);



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
  <br><br><br><br><br><br><br><h1>Review Submitted!</h1><br>
  <div class="link-container">
  <a href="home_in.html">GO TO HOME PAGE</a>
</div>