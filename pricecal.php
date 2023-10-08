<?php

// Establish database connection

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from pricecal table
$sql = "SELECT * FROM pricecal";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Loop through rows
  while($row = mysqli_fetch_assoc($result)) {
    // Calculate price based on criteria
    $price = 200;

    if ($row["carmilesperyear"] <= 1000) {
      $price += 50;
  } else {
      $price += 0 + (intval ($row["carmilesperyear"]) - 1000) * 0.02;
  }

    if ($row["childunder16"] >= 1 && $row["childunder16"] <= 6) {
      $price += 100;
    } else {
      $price += 300;
    }
    $price += ($row["noclaimbonusyears"] * 20);
    if ($row["DVLA"] == 1) {
      $price += 400;
    } else {
      $price += 100;
    }
    if ($row["coverneed"] == "Comprehensive") {
      $price += 600;
    } else if ($row["coverneed"] == "Third Party") {
      $price += 300;
    } else if ($row["coverneed"] == "Third Party, fire and theft") {
      $price += 100;
    }
    
    // Update finalprice column in the last row
    $last_id = $row["id"];
  }


  $sql = "UPDATE pricecal SET finalprice = $price, finalprice2 = $price*1.10, finalprice3 = $price*1.40 WHERE id = $last_id";
 
  // $sql = "UPDATE pricecal SET finalprice = $price WHERE id = $last_id";
  mysqli_query($conn, $sql);
} else {
  echo "0 results";
}

header("Location: pricing.php");

// Close database connection
mysqli_close($conn);
?>