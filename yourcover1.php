<?php

// database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// create connection
$conn = mysqli_connect("localhost", "root", "", "test");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// form data
$coverdate = $_POST['coverdate'];
$coverneed = $_POST['coverneed'];
$paycar = $_POST['paycar'];

// insert data
$sql = "INSERT INTO yourcover (coverstart,coverneed,usuallypaycarinsurance)
VALUES ('$coverdate','$coverneed','$paycar')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";

    // get the ID of the last row in the pricecal table
    $result = mysqli_query($conn, "SELECT id FROM pricecal ORDER BY id DESC LIMIT 1");
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];

    // update the carmilesperyear column of the last row
    $sql = "UPDATE pricecal SET coverneed = '$coverneed' WHERE id = $id";
    mysqli_query($conn, $sql);

    // update the covername column of table users of the last row
    $sql = "UPDATE users SET covername = '$coverneed' WHERE id = (SELECT MAX(id) FROM users)";
    mysqli_query($conn, $sql);

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

header("Location: pricecal.php");
mysqli_close($conn);

?>
