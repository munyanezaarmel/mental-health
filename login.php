<?php

session_start();

	include("connection.php");
	include("function.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_email = $_POST['email'];
		$user_password = md5($_POST['password']);

		if(!empty($user_email) && !empty($user_password))
		{
			//read from database
			$query = "select * from users where user_email = '$user_email'&& user_password='$user_password' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
						$_SESSION['user_id'] = $user_data['user_id'];
						$_SESSION['login-succefully']="login succesfully";
						echo '<script type="text/javascript">';
						echo ' alert("Logged in successful you can now book appointment")';  //not showing an alert box.
						echo '</script>';
						header("Location: index.php");
						die;
					}

			}

		        echo '<script type="text/javascript">';
						echo ' alert("wrong email or password")';  //not showing an alert box.
						echo '</script>';
		}else
		{
		       echo '<script type="text/javascript">';
						echo ' alert("wrong email or password")';  //not showing an alert box.
						echo '</script>';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e0cc9999b0.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>welcome | mental health</title>
</head>
<body bgcolor="">
    <section class="form-section" id="contact">
		<div class="head2-div">
			<h2>Login</h2>
		</div>
		<?php
if(isset($_SESSION['signup-succesfully'])){
	echo '<script type="text/javascript">';
    echo ' alert( "account created successful Login to continue")';
	//not showing an alert box.
    echo '</script>';
}

		?>
		<form method="post">
			<div class="form-container">
			<label for="email">email</label>
			<input type="email" id="email" placeholder="Your email" name="email" required>
			<label for="password">Password</label>
			<input type="password" id="password" placeholder="Your password" name="password" required>
			<button  type="submit"class="btn "name="submit">Login</button>
            <a href="signup.php">sign up if you dont have account</a>
			</div>
		</form>
</body>
</html>