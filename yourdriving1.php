<?php

// database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// form data
$licensehold = $_POST['licensehold'];
$DVLAA = $_POST['DVLAA'];
$Bonus = $_POST['Bonus'];

// insert data
$sql = "INSERT INTO yourdriving (licenesetypehold,DVLA,noclaimbonusyears)
VALUES ('$licensehold','$DVLAA','$Bonus')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";

    // get the ID of the last row in the pricecal table
    $result = mysqli_query($conn, "SELECT id FROM pricecal ORDER BY id DESC LIMIT 1");
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];

    // update the carmilesperyear column of the last row
    $sql = "UPDATE pricecal SET noclaimbonusyears = '$Bonus' , DVLA = '$DVLAA' WHERE id = $id";
    mysqli_query($conn, $sql);

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("Location: yourcover1.html");
mysqli_close($conn);

?>
