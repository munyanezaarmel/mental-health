<?php
session_start();
include("connection.php");
include("function.php");
$user_data= check_login($con);

if($_SERVER['REQUEST_METHOD']==='POST'){
	// Getting deatail  from forms
	@$name = $_POST['name'];
	@$email = $_POST['email'];
	@$comment = $_POST['comment'];
	@$sql = "INSERT INTO comment (name,email,comment)
	VALUES('$name','$email','$comment')";
	$result = mysqli_query($con,$sql);
	if($result){
		echo '<script type="text/javascript">';
echo ' alert("message sent successfully")';  //not showing an alert box.
echo '</script>';
	}
	else{
        echo '<script type="text/javascript">';
        echo ' alert("message not sent try again!!!!")';  //not showing an alert box.
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
    <table border="0" cellspacing="10" cellpadding="10" width="100%">
  <tr>

    <td width="25%"> <img src="./images/logo.jpg" alt="company logo" width="150" height="150"></td>
   <td width="75%" colspan="3"> <h1>HOLISTIC HEALTH</h1>
</td>
  </tr>
  <tr bgcolor="">
    <td><a href="./index.html">Home</a></td>
    <td><a href="#about">about</a></td>
    <td><a href="./index.html">Services</a></td>
    <td><a href="logout.php">Log out</a></td>
    <td><a href="appointment.php"><i class="fa-solid fa-user-doctor bounce"></i></a></td>
</tr>
<tr>
    <td width="25%" colspan="5"> <marquee behavior="" direction="" scrollamount="20"><img src="./images/image2.jpg" alt="">
        <img src="./images/image4.jpeg" height="25%" alt="">
        <img src="./images" height="25%" alt="">
    </marquee>
    <td  width="20%"><img src="./images/image6.webp" alt=""></td>
    </tr>
    <tr>
        <td colspan="2"><h2 id="about">Our Mission</h2></td>
        <td colspan="3"><h1>our values</h1></td>
        <td><h1>our History</h1></td>
    </tr>
    <tr>
        <td colspan="2">
      <ul>
        <li>Improve the community’s understanding of mental health and the mind-body connection between mental and physical health</li>
        <li>Assure that those who request information and need mental health care referral have confidential access to the appropriate information and know how to obtain</li>
        <li>Assure that those who request information and need mental health care referral have confidential access to the appropriate information and know how to obtain</li>
        <li>Improve the community’s understanding of mental health and the mind-body connection between mental and physical health</li>
      </ul>
        </td>
        <td colspan="2">
            <ul>
                <li>Every person, regardless of their disability, race, ethnicity, gender, age, economic status, or sexual orientation, has the right and responsibilities to full potential in</li>
                <li>Mental health is essential to personal well being, and is fundamental to achieving a healthy, balanced, and productive life</li>
                <li>We fulfill our mission most effectively when we collaborate with others and when we actively look for partners to achieve our goals</li>
            </ul>
                </td>
                <td colspan="3">
               <ul>
                <li>The history of Mental Health America is the remarkable story of one person who turned a personal struggle with mental illness into a national movement and of the millions of others who came together to fulfill his vision.

                    Around the turn of the twentieth century, Clifford W. Beers, a recent graduate of Yale College and a newly-minted Wall Street financier, suffered his first episode of bipolar disorder (manic depressive illness) following the illness and death of his brother. In the throes of his illness, Beers attempted to take his own life by jumping out a third story window. Seriously injured but still alive, Beers ended up in public and private hospitals in Connecticut for the next three years.</li>
               </ul>
                </td>
    </table>
    <?php
if(isset($_SESSION['login-succefully'])){
    echo '<script type="text/javascript">';
    echo ' alert( "logged in successful")';  //not showing an alert box.
    echo '</script>';
      //not showing an alert box.
}




    ?>
    <section class="form-section">
		<div class="head2-div">
			<h2>leave us a comment </h2>
		</div>
		<form method="post">
			<div class="form-container">
			<label for="name">Name</label>
			<input type="text" id="name" name="name" placeholder="Your name" required>
			<label for="email">email</label>
			<input type="email" id="email" name="email"  placeholder="Your email" required>
			<label for="comment">Leave comment</label>
			<textarea  id="comment" name="comment" ></textarea>
			<label for="">&nbsp;</label>
			<button type="submit" name="button" class="btn ">send it</button>
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
                    <li><a class="footer-icon-link" href="#"><i class="fa-brands fa-facebook addresing-icon" ></i></a></li>
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