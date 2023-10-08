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
$reg_no = $_POST['regno'];
$modified = $_POST['modified'];
$date = $_POST['date'];
$check = isset($_POST['check']) ? 1 : 0;
$selected_option = $_POST['options'];
$selected_optionn = $_POST['optionn'];
$par = $_POST['park'];
$car_miles = $_POST['miless'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$emailadd = $_POST['emailadd'];
$cnfrmemail = $_POST['cnfrmemail'];

// insert data into 'about' table
$sql_about = "INSERT INTO about (regno,bodyworkormodified,date,checkbox,regkeeper,carusepurpose,carparkovernight,carmilesperyear,fname,lname,dob,emailaddress,cnfirmemail)
VALUES ('$reg_no','$modified','$date','$check','$selected_option','$selected_optionn','$par','$car_miles','$fname','$lname','$dob','$emailadd','$cnfrmemail')";
mysqli_query($conn, $sql_about);

// insert data into 'pricecal' table
$sql_pricecal = "INSERT INTO pricecal (carmilesperyear)
VALUES ('$car_miles')";
mysqli_query($conn, $sql_pricecal);

// check if both queries were successful
if (mysqli_affected_rows($conn) == 2) {
    echo "New records created successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

// close connection
mysqli_close($conn);

// redirect to next page
header("Location: yourinfo1.html");



// // database connection
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "test";

// // create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// // check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // form data
// $reg_no = $_POST['regno'];
// $modified = $_POST['modified'];
// $date = $_POST['date'];
// $check = isset($_POST['check']) ? 1 : 0;
// $selected_option = $_POST['options'];
// $selected_optionn = $_POST['optionn'];
// $par = $_POST['park'];
// $car_miles = $_POST['miless'];
// $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// $dob = $_POST['dob'];
// $emailadd = $_POST['emailadd'];
// $cnfrmemail = $_POST['cnfrmemail'];

// // insert data
// $sql = "INSERT INTO about (regno,bodyworkormodified,date,checkbox,regkeeper,carusepurpose,carparkovernight,carmilesperyear,fname,lname,dob,emailaddress,cnfirmemail)
// VALUES ('$reg_no','$modified','$date','$check','$selected_option','$selected_optionn','$par','$car_miles','$fname','$lname','$dob','$emailadd','$cnfrmemail')";

// $sql = "INSERT INTO pricecal (carmilesperyear)
// VALUES ('$car_miles')";




// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// header("Location: yourinfo1.html");

// mysqli_close($conn);

?>
