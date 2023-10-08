<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Broker Insurance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;700;800;900&display=swap" rel="stylesheet">
  </head>
  <body >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="home_in.html">Car Broker Insurance</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home_in.html">Home</a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="quote1_in.html" >Get a quote</a>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="cars_in.html" role="button" aria-expanded="false" > Car Insurance </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="aboutus_in.html" >About Us</a>
            </li>
          </ul>
           
          <a href="logout.php" ><button style="background-color: forestgreen; padding: 5px; color: white; border: none;" type="button">logout</button></a>


          </form>
        </div>
      </div>
    </nav> -->


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
    <a class="navbar-brand" href="home_in.html">Car Broker Insurance</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home_in.html">Home</a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="quote1_in.html" >Get a quote</a>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="cars_in.html" role="button" aria-expanded="false" > Car Insurance </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="aboutus_in.html" >About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reviews_previous.php" >Clients Reviews</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="calculator.html" >Calculator</a>
          </li>
      </ul>
      <a href="logout.php" ><button style="background-color: forestgreen; padding: 5px; color: white; border: none;" type="button">logout</button></a>


      </form>
    </div>
  </div>
</nav>



<!-- //////////// -->

<html>
  <head>
  <title>Pricings</title>
    <style>
      table {
          width: 80%;
          margin: 20px auto;
          border-collapse: collapse;
          text-align: center;
          border-radius: 10px;
      }
      th{
        border: 1px solid #dddddd;
          padding: 8px;
        color: white;
      } 
      td {
          border: 1px solid #dddddd;
          padding: 8px;
      }
      th {
          background-color: rgb(51, 8, 68);
      }
      tr:nth-child(even) {
          background-color: #f2f2f2;
      }
      .buy-button {
          background-color: green;
          color: white;
          padding: 8px 16px;
          border-radius: 5px;
          cursor: pointer;
      }
      h1 {
    text-align: center;
    margin-bottom: 40px;
  }
    </style>
  </head>
  <body>
   <h1>Pricing page</h1>
 



<?php


// Create connection
$conn = mysqli_connect("localhost", "root", "", "test");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve buyer name
$buyer_name_query = "SELECT name FROM users ORDER BY id DESC LIMIT 1";
$buyer_name_result = $conn->query($buyer_name_query);

// Query to retrieve prices
$price_query = "SELECT finalprice AS epic, finalprice2 AS rare, finalprice3 AS premium FROM pricecal ORDER BY id DESC LIMIT 1";
$price_result = $conn->query($price_query);

// Query to retrieve package names
$package_name_query = "SELECT coverneed FROM yourcover";
$package_name_result = $conn->query($package_name_query);


echo "<table>
        <tr>
            <th>Buyer Name</th>
            <th>Annual price</th>
            <th>Insurance Companies</th>
            <th>Insurance Features & Extras</th>
            <th>Purchase</th>
        </tr>";

// Loop through the result of buyer name query
if ($buyer_name_result->num_rows > 0) {
    while ($row = $buyer_name_result->fetch_assoc()) {
        // Loop through the result of price query
        if ($price_result->num_rows > 0) {
            while ($price_row = $price_result->fetch_assoc()) {
                echo "<tr>
                        <td></td>
                        <td>" . '£' . $price_row["epic"] . "</td>
                        <td>My Insurance</td>
                        <td>Breakdown Cover</td>
                        <td>
                          <form method='post' action='save_price.php'>
                            <input type='hidden' name='boughtprice' value='" . $price_row["epic"] . "'>
                            <button type='submit' onclick='showMessage()'>BUY</button>
                          </form>
                        </td>
                      </tr>
                      <tr>
                        <td>" . $row["name"] . "</td>
                        <td>" . '£'. $price_row["rare"] . "</td>
                        <td>Easy Insurance</td>
                        <td>Breakdown Cover <br>Courtesy Cover <br>Windscreen Cover </td>
                        <td>
                          <form method='post' action='save_price.php'>
                            <input type='hidden' name='boughtprice' value='" . $price_row["rare"] . "'>
                            <button type='submit' onclick='showMessage()'>BUY</button>
                          </form>
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>" . '£'. $price_row["premium"] . "</td>
                        <td>Motor Insurance</td>
                        <td>Breakdown Cover<br>Courtesy Cover<br>Windscreen Cover<br>Legal Cover<br>Replacement Key Cover</td>
                        <td>
                          <form method='post' action='save_price.php'>
                            <input type='hidden' name='boughtprice' value='" . $price_row["premium"] . "'>
                            <button type='submit' onclick='showMessage()'>BUY</button>
                          </form>
                        </td>
                      </tr>";
            }
        }
    }
}


$conn->close();


?>

