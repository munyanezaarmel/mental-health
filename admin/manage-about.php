<?php
include("../connection.php");
?>




<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../style.css">
<script src="https://kit.fontawesome.com/e0cc9999b0.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>welcome | mental health</title>
</head>
<body bgcolor="">
    <table border="0" cellspacing="10" cellpadding="10" width="100%">
  <tr>

    <td width="25%"> <img src="../images/logo.jpg" alt="company logo" width="150" height="150"></td>
   <td width="75%" colspan="3"> <h1>HOLISTIC HEALTH</h1>
</td>
  </tr>
  <tr bgcolor="">
    <td><a href="index.php">Home</a></td>
    <td><a href="manage-about.php">about</a></td>
    <td><a href="users.php">our user</a></td>
    <td><a href="logout.php">Log out</a></td>
    <td><a href="appointment.php">apointment</a></td>
	<td><a href="user-comment.php">users comment</a></td>
</tr>
</table>
<table class="table" border="1">
	<tr>
		<th>id</th>
		<th>ourmission</th>
		<th>ourmission detail</th>
		<th>ourvalues</th>
		<th>ourvalus detail</th>
		<th>ourhistory</th>
		<th>our details history</th>
		<th>action</th>
	</tr>
	<?php
 $query = "select * from about";
 $result  = mysqli_query($con,$query);
 if($result){
$count = mysqli_num_rows($result);
if($count>0){
	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		$ourmission = $row['our_mission'];
		$ourmission_detail = $row['details_mission'];
		$ourvalues = $row['our_values'];
		$details_ourvalues=$row['details_our_values'];
		$ourhistory =$row['our_history'];
		$details_ourhistory = $row['details_our_history'];
	?>
<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $ourmission; ?></td>
		<td> <?php echo $ourmission_detail; ?></td>
		<td><?php  echo $ourvalues;?></td>
		<td><?php echo $details_ourvalues; ?></td>
		<td><?php echo $ourhistory;?></td>
		<td><?php echo $details_ourhistory; ?></td>
		<td><a href="update-about.php?id=<?php echo $id ?>" class="button-update">update</a></td>
		<td><a href="delete-about.php?id=<?php echo $id ?>"  class="button-delete">delete</a></td>

	</tr>
	<?php
	}
}
 }




	?>

</table>

</body>

</html>