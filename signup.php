<?php 

	session_start();
	
	$connection = new mysqli("localhost", "root", "", "test");

	$error = '';
	$name = '';
	$email = '';
	$password = '';


	if( $_SERVER['REQUEST_METHOD']=="POST" ){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if( $name=='' || $email=='' || $password=='' ){
			$error = 'Please fill out all the fields';
		}else{

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  $error = "Invalid email format";
			}else if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/", $password)) {
				$error = "Password must contain at least:<br>
         1.\tone uppercase letter<br> 
         2.\tone lowercase letter<br> 
         3.\tone digit<br> 
         4.\tand eight characters long";


            }else{
				$result = $connection->query("SELECT * FROM users WHERE email='$email'");
				if( $result->num_rows==1 ){
					$error = 'This email already exists';
				}else{

					$encryptedpassword = md5($password);

					$connection->query("INSERT INTO users SET name='$name', email='$email', password='$encryptedpassword'");

					$name = '';
					$email = '';
					$password = '';

					$error = 'Everything looks good!';
					header("Location: login.php");
				}	
			}
		}
	}




?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="signup.css">
	  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;700;800;900&display=swap" rel="stylesheet">
	
</head>
<body style="background-image: url(k.jpg); background-repeat: no-repeat; background-size: auto;   " >

	
	<div style="font-family: 'Montserrat', sans-serif" class="box">
		
		<h2>Register with us</h2>

		<div class="error"><?php echo $error; ?></div>

		<div style= "font-family: 'Montserrat', sans-serif; font-size: ;" class="form">

			<form action="signup.php" method="POST">
				
				<div style="" class="fieldwrapper">
					<label for="name">Name</label>
					<input type="text" id="name" placeholder="Name" name="name" value="<?php echo $name; ?>" >
				</div>

				<div class="fieldwrapper">
					<label for="email">Email</label>
					<input type="text" id="email" placeholder="Email" name="email" value="<?php echo $email; ?>">
				</div>

				<div class="fieldwrapper">
					<label for="password">Password</label>
					<input type="password" id="password" placeholder="Password" name="password" value="<?php echo $password; ?>">
				</div>

				<div class="fieldwrapper fieldwrapper1">
				<button type="submit">Register</button>
				<button><a href="login.php" style=" color : white;" >Sign in?</a></button>
				</div>
				

			</form>



		</div>

	</div>

</body>
</html>