<?php
include("../connection.php");
if($_SERVER['REQUEST_METHOD']==='POST'){
	// Getting deatail  from forms
	@$ourmission = $_POST['ourmission'];
	@$missionDetail = $_POST['mission-details'];
	@$ourvalues = $_POST['ourvalues'];
	@$values_details = $_POST['values-details'];
	@$ourhistory = $_POST['ourhistory'];
	@$ourhistory_details = $_POST['ourhistory-details'];
	@$sql = "INSERT INTO about (our_mission,details_mission,our_values,details_our_values,our_history,details_our_history)
	VALUES('$ourmission','$missionDetail','$ourvalues','$values_details','$ourhistory','$ourhistory_details')";
	$result = mysqli_query($con,$sql);
	if($result){
		echo '<script type="text/javascript">';
        echo ' alert("data inserted successfully")';  //not showing an alert box.
        echo '</script>';
		header("location:manage-about.php");
	}
	else{
		echo '<script type="text/javascript">';
        echo ' alert("data not inserted try again!!!!")';  //not showing an alert box.
        echo '</script>';
	}

}
?>

<!DOCTYPE html>
<html lang="en">



<form method="post" >
			<div class="form-container">
			<label for="name">our mission</label>
			<input type="text" id="name" name="ourmission" placeholder="Your name" required>
			<label for="email">ourmission details</label>
			<textarea id="comment" name="mission-details" ></textarea>
			<label for="name">our values</label>
			<input type="text" id="name" name="ourvalues" placeholder="Your name" required>
			<label for="email"> our values details</label>
			<textarea  id="comment" name="values-details" ></textarea>
			<label for="name">our history</label>
			<input type="text" id="name" name="ourhistory" placeholder="Your name" required>
			<label for="email">our history details</label>
			<textarea  id="comment" name="ourhistory-details" ></textarea>
			<button type="submit" name="button" class="btn ">create</button>
			</div>
		</form>
</body>
</html>