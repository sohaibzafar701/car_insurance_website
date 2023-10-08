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
$title = $_POST['title'];
$Martial = $_POST['Martial'];
$liveuk = $_POST['liveuk'];
$telno = $_POST['telno'];
$childrens = $_POST['childrens'];
$postcode = $_POST['postcode'];
$hno = $_POST['hno'];
$textarea = $_POST['textarea']; 
$carkept = $_POST['carkept'];
$occupation = $_POST['occupation'];
$occupationvehicle = $_POST['occupationvehicle'];



/////////////////////////////////



// insert data
$sql = "INSERT INTO yourinfo (title,martialstat,liveinuk,telephoneno,childunder16,postcode,houseno,address,carkeptonaddresswholenight,occupationstatus,occupationrequireyoutouseyourvehicleforworkpurposes)
VALUES ('$title','$Martial','$liveuk','$telno','$childrens','$postcode','$hno','$textarea','$carkept','$occupation','$occupationvehicle')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    
    // get the ID of the last row in the pricecal table
    $result = mysqli_query($conn, "SELECT id FROM pricecal ORDER BY id DESC LIMIT 1");
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];

    // update the childunder16 column of the last row
    $sql = "UPDATE pricecal SET childunder16 = '$childrens' WHERE id = $id";
    mysqli_query($conn, $sql);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

header("Location: yourdriving1.html");
mysqli_close($conn);




/////////////////////////////////
// // insert data
// $sql = "INSERT INTO yourinfo (title,martialstat,liveinuk,telephoneno,childunder16,postcode,houseno,address,carkeptonaddresswholenight,occupationstatus,occupationrequireyoutouseyourvehicleforworkpurposes)
// VALUES ('$title','$Martial','$liveuk','$telno','$childrens','$postcode','$hno','$textarea','$carkept','$occupation','$occupationvehicle')";

// // get the ID of the last row in the pricecal table
// $result = mysqli_query($conn, "SELECT id FROM pricecal ORDER BY id DESC LIMIT 1");
// $row = mysqli_fetch_assoc($result);
// $id = $row['id'];

// // update the carmilesperyear column of the last row
// $sql = "UPDATE pricecal SET childunder16 = '$childrens' WHERE id = $id";
// mysqli_query($conn, $sql);



// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// header("Location: yourdriving1.html");
// mysqli_close($conn);

?>
