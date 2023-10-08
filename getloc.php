<!-- 
<!doctype html>
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
////// 

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



<!-- ////////////////// -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Get Current Location and Save to Database</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzsI_06XXyITJLw7ucZjj8wWW7xEdD9w8"></script>
    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            var mapOptions = {
                center: new google.maps.LatLng(latitude, longitude),
                zoom: 12
            };
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(latitude, longitude),
                map: map,
                title: "You are here."
            });
            $("#latitude").val(latitude);
            $("#longitude").val(longitude);
        }

        $(document).ready(function() {
            $("#saveBtn").click(function() {
                var latitude = $("#latitude").val();
                var longitude = $("#longitude").val();
                $.ajax({
                    type: "POST",
                    url: "save_location.php",
                    data: {
                        latitude: latitude,
                        longitude: longitude
                    },
                    success: function(response) {
                        alert(response);
                    }
                });
            });
        });
    </script>

    <style>
        /* Center the map and buttons */
#map {
  margin: 0 auto;
}

div[style="text-align:center;"] {
  text-align: center;
}

/* Style the buttons */
button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}

/* Style the save button differently */
#saveBtn {
  background-color: #008CBA; /* Blue */
}

/* Hide the latitude and longitude input fields */
input[type="hidden"] {
  display: none;
}
</style>


</head>
<body>
    
    <div style="text-align:center;">
    <br>
    <button onclick="getLocation()">Get Current Location</button>
    </div>
    <br>
    <div id="map" style="width:80%;height:500px;"></div>
    <br>
    <div style="text-align:center;">
    <a href="aboutcar1.html"><button id="saveBtn">Continue</button></a>
    </div>
    <input type="hidden" id="latitude">
    <input type="hidden" id="longitude">




    <!-- <footer> -->
    <div  class="footer">
  
  <h3>© 2022 Copyright:Car Insurance Broker</h3> 
</div>
</body>
</html>
