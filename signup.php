<?php
session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['name'];
        $user_email = $_POST['email'];
		$user_password = md5($_POST['password']);


		if(!empty($user_name) && !empty($user_email) && !empty($user_password))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,user_email,user_password) values ('$user_id','$user_name','$user_email','$user_password')";

			$result=mysqli_query($con, $query);
            if($result){
                $_SESSION['signup-succesfully']="acount created succesfully";
             header("Location: login.php");
             echo '<script type="text/javascript">';
             echo ' alert("account created successful Login to continue")';  //not showing an alert box.
             echo '</script>';
            }
		}else
		{
		 echo '<script type="text/javascript">';
        echo ' alert("please enter valid infomation")';  //not showing an alert box.
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
  <tr bgcolor="">
    <a href="index.php">Go back home</a>
    <section class="form-section" id="contact">
		<div class="head2-div">
			<h2>create account or</h2> <a href="./login.php">Login </a>

		</div>
		<form method="post">
			<div class="form-container">
			<label for="name">Name</label>
			<input type="text" id="name" placeholder="Your name" name="name" required>
			<label for="email">email</label>
			<input type="email" id="email" placeholder="Your email" name="email" required>
			<label for="password">Password</label>
			<input type="password" id="password" placeholder="Your password" name="password"required>
			<button class="btn" name="submit">create account</button>
			</div>
		</form>
</section>
    <footer>
        <div class="footer-container">
            <div class="nav-footer">
                <ul class="navig">
                    <li><a class="address-link for-color" href="#">About us </a></li>
                    <li><a class="address-link for-color" href="#">Blog </a></li>
                    <li><a class="address-link for-color" href="#">Press </a></li>
                    <li><a class="address-link for-color" href="#">iOs App </a></li>
                    <li><a class="address-link for-color" href="#">Android App </a></li>
            </div>
            <div class="social-footer">
                <ul class="navig social-media">
                    <li><a class="footer-icon-link" href="#"><i class="fa-brands fa-facebook addresing-icon"></i></a></li>
                    <li><a class="footer-icon-link" href="#"><i class="fa-brands fa-twitter addresing-icon"></i></a></li>
                    <li><a class="footer-icon-link" href="#"><i class="fa-brands fa-google addresing-icon"></i></a></li>
                    <li><a class="footer-icon-link" href="#"><i class="fa-brands fa-instagram addresing-icon"></i></a></li>

                </ul>
            </div>
        </div>
        <div id="copy-right">
            <script>
                const paragraph = `
                <p>
                  Copyright &copy; ${new Date().getFullYear()} Munyaneza Armel
                </p>
              `;
                document.getElementById('copy-right').innerHTML = paragraph;
              </script>
        </div>
    </footer>
</body>
</html>