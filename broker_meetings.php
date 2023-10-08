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

   <!-- end of nav bar -->


<!-- ///////////////////////////// -->

<!DOCTYPE html>
<html>
<head>
	<title>Car Broker Meeting Page</title>
    <style>
/* Global styles */

body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
}

h1 {
	text-align: center;
	margin-top: 30px;
}

p {
	text-align: center;
	margin-top: 30px;
    margin-left: 200px;
    margin-right: 200px;
}

.meeting-ul {
	list-style: none;
	padding: 0;
	margin: 30px auto;
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
}

.meeting-li {
	margin: 10px;
}

.meeting-link {
	display: block;
	padding: 10px;
	background-color: #eee;
	border-radius: 5px;
	text-decoration: none;
	color: #333;
	transition: background-color 0.2s ease;
}

.meeting-link:hover {
	background-color: #ccc;
}

/* Form styles */

#form-container {
	margin: 30px auto;
	max-width: 500px;
	padding: 20px;
	background-color: #eee;
	border-radius: 5px;
	display: none;
}

h2 {
	margin-top: 0;
	text-align: center;
}


h3 {
	margin-bottom: 5;
	text-align: center;
}


form {
	display: flex;
	flex-direction: column;
	align-items: center;
}

label {
	margin-top: 10px;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="date"],
input[type="time"],
input[type="submit"] {
	padding: 10px;
	margin-top: 5px;
	border-radius: 5px;
	border: none;
	box-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

input[type="submit"] {
	margin-top: 20px;
	background-color: #333;
	color: #fff;
	cursor: pointer;
	transition: background-color 0.2s ease;
}

input[type="submit"]:hover {
	background-color: #555;
}



  .footer {
    
    padding: 10px;
    text-align: center;
  }

  .footer h3 {
    margin: 10;
  }





        </style>
</head>
<body>


	<h1>Car Insurance Broker Companies</h1>
	
	<p>Our service provides a user-friendly platform where users can request meetings with car insurance brokers for expert consultancy. We understand that finding the right car insurance can be a daunting task, and our service aims to simplify the process by connecting users with experienced brokers. With just a few clicks, users can request a meeting and receive personalized advice from industry professionals. Our goal is to help users make informed decisions and find the best car insurance options for their needs.
        <br><br>Select a company below to request a meeting:</p>

	<ul class="meeting-ul">
		<li class="meeting-li"><a href="#" class="meeting-link" onclick="showForm('Pronto Insurance')">Pronto Insurance</a></li>
		<li class="meeting-li"><a href="#" class="meeting-link" onclick="showForm('Safeco Insurance')">Safeco Insurance</a></li>
		<li class="meeting-li"><a href="#" class="meeting-link" onclick="showForm('State Auto Insurance')">State Auto Insurance</a></li>
		<li class="meeting-li"><a href="#" class="meeting-link" onclick="showForm('Travelers Insurance')">Travelers Insurance</a></li>
	</ul>

	<div id="form-container" style="display:none;">
		<h2>Request Meeting with <span id="company-name"></span></h2>
		<form method="post" action="broker_meetings_process.php">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>

			<label for="phone">Phone:</label>
			<input type="tel" id="phone" name="phone" required>

			<label for="date">Preferred Date:</label>
			<input type="date" id="date" name="date">

			<label for="time">Preferred Time:</label>
			<input type="time" id="time" name="time">

			<label for="comments">Comments or Questions:</label>
			<textarea id="comments" name="comments"></textarea>

			<input type="submit" value="Request Meeting">
		</form>
	</div>

	<script>
		function showForm(companyName) {
			// Set the company name in the form header
			document.getElementById("company-name").innerHTML = companyName;

			// Show the form container
			document.getElementById("form-container").style.display = "block";
		}
	</script>


<div class="footer">
  
  <h3>© 2022 Copyright:Car Insurance Broker</h3> 
    



</body>
</html>
