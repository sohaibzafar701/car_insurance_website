<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Broker Insurance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


    <style>
      .dropdown {
        
        position: relative;
        display: inline-block;

      }
      
      .dropdown-btn {
        background-color: forestgreen;
        color: white;
        padding: 9px;
        border: none;
        margin-right: 25px;
      }
      
      .dropdown-content {
        background-color: forestgreen;
        color: white;
        padding: 9px;
        display: none;
        position: absolute;
        z-index: 1;
      }
      
      .dropdown:hover .dropdown-content {
        display: block;
      }
      </style>
    
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.html">Car Broker Insurance</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.html">Home</a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="quote1.html" >Get a quote</a>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="cars.html" role="button" aria-expanded="false" > Car Insurance </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="aboutus.html" >About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reviews_previous_out.php" >Clients Reviews</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="calculator_out.html" >Calculator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="broker_meetings.php" >Request Meetings</a>
          </li>
      </ul>
    </ul>
    <div class="dropdown">
      <button class="dropdown-btn">Menu</button>
      <div class="dropdown-content">
        <a href="signup.php">Register</a>
        <a href="login.php">Sign In<br></a>
        <a href="adminlogin.php">Log in as Admin</a>
      </div>
    </div>


      </form>
    </div>
  </div>
</nav>


<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
<!DOCTYPE html>
<html>
<head>
	<title>Car Broker Insurance</title>
	<style type="text/css">
        .paragraph1 {
  font-family: 'Open Sans', sans-serif;
  font-size: 18px;
  line-height: 1.5;
  color: #333;
  margin-bottom: 20px;
  text-align: justify;
  padding: 0 150px;
}

.paragraph1:first-child {
  margin-top: 0;
}

.paragraph1:last-child {
  margin-bottom: 0;
}
h1{
    font-family: 'Open Sans', sans-serif;
  font-size: 38px;
  padding: 0 150px;
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




/* previous reviews section */
/* Style for previous reviews section */


.previous-reviews {
  display: flex;
  flex-direction: column;
  max-width: 50%;
  margin: 0 auto;
  float: down;
}

.review-box {
padding: 5px;
margin-bottom: 10px;
border: 1px solid #ccc;
}

.buyername {
  font-weight: bold;
  text-align: center;
  color: white;
  background-color: #696969;

}

.rating {
  margin-top: 10px;
}

.rating span {
  color: #f1c40f;
}
h2 {  
  text-align: center;
}
/* Style for text on the right side */
.text-right {
  text-align: right;
}

/* Style for beautiful text */
.beautiful-text {
  font-family: 'Helvetica Neue', sans-serif;
  font-size: 16px;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: #333;
}

/* Style the form */
form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 2rem;
}

label {
  font-weight: bold;
  margin-top: 1rem;
}

.previous-reviews {
  width: 600px;
  display: flex;
  flex-direction: column;
  max-width: 50%;
  margin: 0 auto;
  float: down;
}

textarea {
  width: 400px;
  height: 150px;
  padding: 0.5rem;
  margin-top: 0.5rem;
  border-radius: 0.25rem;
  border: 1px solid #ccc;
  font-size: 1rem;
  font-family: sans-serif;
  resize: vertical;
}

.stars {
  display: flex;
  margin-top: 0.5rem;
  margin-bottom: 1rem;
}

.star {
  display: inline-block;
  font-size: 1.5rem;
  color: #ccc;
  cursor: pointer;
  transition: color 0.2s;
  margin-right: 0.25rem;
}

.star:hover, .star.active {
  color: #f2b01e;
}

input[type="submit"] {
  padding: 0.5rem 1rem;
  margin-top: 1rem;
  border-radius: 0.25rem;
  border: none;
  background-color: #f2b01e;
  color: #fff;
  font-size: 1rem;
  font-family: sans-serif;
  cursor: pointer;
  transition: background-color 0.2s;
}

input[type="submit"]:hover {
  background-color: #d49f0c;
}


		.stars {
			display: inline-block;
			font-size: 25px;
			color: #f2b01e;
			text-shadow: 1px 1px #888;
		}
		.star {
			cursor: pointer;
		}
		.star:before {
			content: "\2605";
		}
		.star.active:before,
		.star:hover:before {
			content: "\2605";
			color: #d49f0c;
		}
	</style>
</head>
<body>
	  
<br><br>
    <h1>We Provide the quality</h1><br>
    <p class="paragraph1">At our company, we take great pride in delivering exceptional services to our clients. 
        Our dedication to quality and customer satisfaction is second to none, and we're thrilled 
        to see our clients consistently express their happiness and satisfaction with our work. 
        Whether it's through our seamless and efficient processes, our attention to detail, 
        or our commitment to going above and beyond, we're honored to have earned the trust 
        and loyalty of so many satisfied clients. Thank you for choosing us and allowing us 
        to be a part of your success story.</p><br>

	<!-- Display previous reviews -->
	<h2>See our customer reviews</h2><br><br>
	<ul>
	<?php
// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "test");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select all reviews from the database
$sql = "SELECT buyername, review, rating FROM user_reviews";
$result = mysqli_query($conn, $sql);

// Display each review, buyername, and its rating
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="previous-reviews">';
        echo '<div class="review-box">';
        echo '<p class="buyername">' . $row["buyername"] . '</p>';
        echo '<p>' . $row["review"] . '</p>';
        echo '<div class="rating">';
        for ($i = 1; $i <= $row["rating"]; $i++) {
            echo '<span>&#9733;</span>'; // Print a star symbol
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "<p>No reviews yet.</p>";
}

// Close database connection
mysqli_close($conn);

		?>
	</ul>
    <div class="link-container">
  <a href="quote1.html">PROCEED TO BUY</a>
  <a href="home.html">GO TO HOME PAGE</a>
</div>

    <!-- <a class ="a1" href="quote1_in.html">PROCEED TO BUY</a> <a class ="a1" href="quote1_in.html">GO TO HOME PAGE</a> -->

