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
      </ul>
      <a href="logout.php" ><button style="background-color: forestgreen; padding: 5px; color: white; border: none;" type="button">logout</button></a>


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
  background-color: rgb(51, 8, 68);

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
	

	<!-- Display previous reviews -->
	<br>


	<!-- Form for users to write a review -->
	<h2>Write a Review:</h2>
	<form method="post" action="reviews.php">
		<label for="review">Review:</label><br>
		<textarea id="review" name="review"></textarea><br>


        
        <label>Rate your purchase:</label><br>
		<div class="stars">
			<span class="star" data-value="1"></span>
			<span class="star" data-value="2"></span>
			<span class="star" data-value="3"></span>
			<span class="star" data-value="4"></span>
			<span class="star" data-value="5"></span>
		</div>
		<input type="hidden" id="rating" name="rating" value="0"><br><br>

		<input type="submit" value="Submit">
	</form>


	<script type="text/javascript">
		// JavaScript code to handle star ratings
		const stars = document.querySelectorAll('.star');
		const rating = document.querySelector('#rating');

		stars.forEach(function(star) {
			star.addEventListener('click', function() {
				stars.forEach(function(s) {
					s.classList.remove('active');
				});
				this.classList.add('active');
				rating.value = this.getAttribute('data-value');
			});
		});
	</script>
</body>
</html>