<?php
include("connection.php");
if($_SERVER['REQUEST_METHOD']==='POST'){
	// Getting deatail  from forms
	@$name = $_POST['name'];
	@$email = $_POST['email'];
	@$phone = $_POST['phone'];
	@$check_in_date = $_POST['checkin'];
	@$check_out_date = $_POST['checkout'];
	@$district = $_POST['district'];
	@$symptoms = $_POST['symptoms'];
	@$sql = "INSERT INTO appointment(name,email,phone,check_in_date,check_out_date,district,symptoms)
	VALUES('$name','$email','$phone','$check_in_date','$check_out_date','$district','$symptoms')";
	$result = mysqli_query($con,$sql);
	if($result){
		echo '<script type="text/javascript">';
        echo ' alert("appointment Booked successful check your email")';  //not showing an alert box.
        echo '</script>';
	}
	else{
		echo '<script type="text/javascript">';
        echo ' alert("failed to book an appointment try again !!!")';  //not showing an alert box.
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
    <link rel="stylesheet" href="booking.css">
    <script src="https://kit.fontawesome.com/e0cc9999b0.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>welcome | mental health</title>
</head>
<body>
<a href="index.php" class="home">go back home</a>
<form action="#" method="post">
  <div class="elem-group">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="name" placeholder="ex:Munyaneza Armel" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="email" placeholder="ex:munyaarmel61@gmail.com" required>
  </div>
  <div class="elem-group">
    <label for="phone">Your Phone</label>
    <input type="tel" id="phone" name="phone" placeholder="Ex:+250785679625" required>
  </div>
  <hr>
  <div class="elem-group inlined">
    <label for="checkin-date">Check-in Date</label>
    <input type="date" id="checkin-date" name="checkin" required>
  </div>
  <div class="elem-group inlined">
    <label for="checkout-date">Check-out Date</label>
    <input type="date" id="checkout-date" name="checkout" required>
  </div>
  <div class="elem-group">
    <label for="room-selection">choose a district</label>
    <select id="room-selection" name="district" required>
        <option value="gabriel">Kigali District- Dr.Dushime Gabriel</option>
        <option value="eva">Southern Province- Dr.Dusingizimana Evaritse</option>
        <option value="bernard">Western Province - Dr.Ishimwe Irumva Bernard</option>
        <option value="sostene">NOrthern Province - Dr.MUNEZERO Bagira Sostene</option>
        <option value="murekezi">Eastern Province - Dr.MUREKEZI ISMAEL</option>
    </select>
  </div>
  <hr>
  <div class="elem-group">
    <label for="symptoms">briefly your symptoms</label>
    <textarea id="symptoms" name="symptoms" placeholder="Tell us briefly about your symptoms" required></textarea>
  </div>
  <button type="submit">Book appointment</button><br>

</form>
</body>
</html>