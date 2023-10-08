<?php


// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "test");


// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$price = NULL;
$basic = NULL;
$standard = NULL;
$premium = NULL;
$carmilesperyear = NULL;
$childunder16 = NULL;
$noclaimbonusyears = NULL;
$DVLA = NULL;
$coverneed = NULL;

// Get the value from the "about" table and the "carmilesperyear" column
$sql = "SELECT carmilesperyear FROM about ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $carmilesperyear = $row["carmilesperyear"];
        if ($carmilesperyear <= 1000) {
            $price += 50;
        } else {
            $price += 50 + (intval($carmilesperyear) - 1000) * 0.02;
        }
    }
}

// Get the value from the "yourinfo" table and the "childunder16" column
$sql = "SELECT childunder16 FROM yourinfo ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $childunder16 = $row["childunder16"];
        if ($childunder16 == 0) {
            $price += 200;
        } elseif ($childunder16 > 0 && $childunder16 <= 16) {
            $price += 50;
        } elseif ($childunder16 > 16) {
            $price += 100;
        }
    }
}

// Get the value from the "yourdriving" table and the "noclaimbonusyears" and "DVLA" columns
$sql = "SELECT noclaimbonusyears, DVLA FROM yourdriving ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $noclaimbonusyears = $row["noclaimbonusyears"];
        $DVLA = $row["DVLA"];
        $noclaimbonusyears = intval($noclaimbonusyears);
        $price -= $noclaimbonusyears * 10;
        if ($DVLA == "Yes") {
            $price -= 100;
        } elseif ($DVLA == "No") {
            $price += 100;
        }
    }
}

// Get the value from the "yourcover" table and the "coverneed" column
$sql = "SELECT coverneed FROM yourcover ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $coverneed = $row["coverneed"];
        if ($coverneed == "Comprehensive") {
            $price += 70;
        } elseif ($coverneed == "Third Party") {
            $price += 150;
        } elseif ($coverneed == "Third Party, fire and theft") {
            $price += 200;
        }
    }
}




////////////////////////////////////////////////////////////////////////////////////////////////

// Write a SQL query to select the fname column from the about table
$sql = "SELECT fname FROM about";

 // Execute the query and store the result in a variable
 $result = mysqli_query($conn, $sql);

 // Fetch the first row from the result set
 $row = mysqli_fetch_assoc($result);

 // Assign the value of the fname column to the buyer variable
 $buyer = $row["fname"];

 // Write a SQL query to update the buyer column of the package table
 $sql = "UPDATE packages SET buyer='$buyer'";

 // Execute the query
 if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
 } else {
    echo "Error updating record: " . mysqli_error($conn);
 }
 // Write a SQL query to select the fname column from the about table



            
            // Calculate the prices for each package based on the final value of $price
            $basic = $price + 500;
            $standard = $price + 600;
            $premium = $price + 850;
            
            // Connect to the database
            $conn = mysqli_connect("localhost", "root", "", "test");
            
            // Check the connection
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            
            // Insert the prices into the database
            $sql = "INSERT INTO packages (buyer,basic,standard,premium)
            VALUES ('$buyer','$basic','$standard','$premium')";
            if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            
            header("Location: pricing.php");
            // Close the connection
            mysqli_close($conn);



 
?>