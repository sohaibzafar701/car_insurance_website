<?php
// database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "test");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Check if latitude and longitude are set
if (!isset($_POST['latitude']) || !isset($_POST['longitude'])) {
    echo "Latitude and/or longitude not set.";
    exit;
}

$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO locations (latitude, longitude) VALUES (?, ?)");
$stmt->bind_param("dd", $latitude, $longitude);

// Execute the statement
if ($stmt->execute() === TRUE) {
    echo "Location saved successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
