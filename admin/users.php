<?php
include("../connection.php");
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" integrity="sha512-EZLkOqwILORob+p0BXZc+Vm3RgJBOe1Iq/0fiI7r/wJgzOFZMlsqTa29UEl6v6U6gsV4uIpsNZoV32YZqrCRCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
    <td><a href="./index.html">Home</a></td>
    <td><a href="manage-about.php">about</a></td>
    <td><a href="manage-appointment.php">appointment</a></td>
    <td><a href="users.php">our users</a></td>
    <td><a href="logout.php">Log out</a></td>
    <td><a href="user-comment.php">user's comment</a></td>
</tr>
</table>
	<table border='1'>
		<thead>
			<tr>
		<th>id</th>
		<th>userId</th>
		<th>user user</th>
		<th>user email</th>
		</tr>
		</thead>

<tbody>
<?php
 $query = "select * from users";
 $result  = mysqli_query($con,$query);
 if($result){
$count = mysqli_num_rows($result);
if($count>0){
	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		@$username = $row['user_name'];
	    @$userId = $row['user_id'];
		@$useremail = $row['user_email'];
		?>
<tr>
<td><?php echo $id; ?></td>
<td><?php echo $userId; ?></td>
<td><?php echo $username; ?></td>
<td><?php echo $useremail; ?></td>
</tr>
<?php
	}
}
	}
	?>



	</table>
</body>
</html>