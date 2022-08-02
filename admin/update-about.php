<?php
include("../connection.php");
$id = $_GET['id'];
echo $id;
// gettting the data from database
$sql = "SELECT * FROM about WHERE id=$id";
$result = mysqli_query($con,$sql);
if($result){
	$count =mysqli_num_rows($result);
	if($count==1){
		$row = mysqli_fetch_assoc($result);
		$ourmission = $row['our_mission'];
		$ourmission_detail = $row['details_mission'];
		$ourvalues = $row['our_values'];
		$details_ourvalues=$row['details_our_values'];
		$ourhistory =$row['our_history'];
		$details_ourhistory = $row['details_our_history'];
	}
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/e0cc9999b0.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<title>Admin | about us </title>
</head>
<body>


<form method="post" >
			<div class="form-container">
			<label for="name">our mission</label>
			<input type="text" id="name" name="ourmission" placeholder="Your name" required value="<?php echo $ourmission;?>">
			<label for="email">ourmission details</label>
			<textarea  name="mission-details" <?php echo $ourmission_detail;?>></textarea>
			<label for="name">our values</label>
			<input type="text" id="name" name="ourvalues" placeholder="Your name" required value="<?php echo $ourvalues;?>">
			<label for="email"> our values details</label>
			<textarea  id="comment" name="values-details" <?php echo $details_ourvalues;?>></textarea>
			<label for="name">our history</label>
			<input type="text" id="name" name="ourhistory" placeholder="Your name" required value="<?php echo $ourhistory;?>">
			<label for="email">our history details</label>
			<textarea  id="comment" name="ourhistory-details"<?php echo $details_ourhistory;?> ></textarea>
			<button type="submit" name="button" class="btn ">create</button>
			</div>
		</form>
</body>
</html>