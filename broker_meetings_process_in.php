
<?php
// Connect to the database
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $comments = $_POST["comments"];
    
    // Insert the data into the "meetings" table
    $sql = "INSERT INTO meetings (name, email, phone, preferred_date, preferred_time, comments)
            VALUES ('$name', '$email', '$phone', '$date', '$time', '$comments')";
     if (mysqli_query($conn, $sql)) {
         echo "<div style='text-align:center; font-size:24px; margin-top:200px;'>Congratulations! Your meeting request has been submitted successfully.</div>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }


}

// Close the database connection
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
  margin: 25px;
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
  <!-- <br><br><br><br><br><br><br><h1>Purchase Succeeded!</h1><br> -->
  <div class="link-container">
  <a href="home_in.html">GO TO HOME PAGE</a>
</div>