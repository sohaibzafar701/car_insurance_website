<?php

	session_start();

	
	$connection = new mysqli("localhost", "root", "", "test");

	$error = '';
	
	$email = '';
	$password = '';


	if( $_SERVER['REQUEST_METHOD']=="POST" ){

		$email = $_POST['email'];
		$password = $_POST['password'];

		if( $email=='' || $password=='' ){
			$error = 'Please fillout all the fields';
		}else{

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  $error = "Invalid email format";
			}else{

				$encryptedpassword = md5($password);

				$result = $connection->query("SELECT * 
												FROM admin1 
												WHERE 
												email='$email' 
												AND
												password='$encryptedpassword'
												");

				if( $result->num_rows==0 ){
					$error = 'Email or password combination does not match';
				}else{

					$data = mysqli_fetch_assoc($result);

					$_SESSION['uid'] = $data['id'];

					header("Location: admin.php");

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
	<link rel="stylesheet" href="login.css">
</head>
<body style="background-image: url(k.jpg);">
	
	
	<div class="box">
		
		<h2>Login as Admin</h2>

		<div class="error"><?php echo $error; ?></div>

		<div class="form">

			<form action="adminlogin.php" method="POST">
				
				<div class="fieldwrapper">
					<label for="email">Email</label>
					<input type="text" id="email" placeholder="Email" name="email" value="<?php echo $email; ?>">
				</div>

				<div class="fieldwrapper">
					<label for="password">Password</label>
					<input type="password" id="password" placeholder="Password" name="password" value="<?php echo $password; ?>">
				</div>

				<div class="fieldwrapper fieldwrapper1">
					<button type="submit">Login</button>
				</div>

			</form>

		</div>



		