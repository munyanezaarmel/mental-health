<?php
include("../connection.php");
if(isset($_GET['id'])){
	$id = $_GET['id'];
	echo $id;
	// sql command to delete data from databse
	$sql = "DELETE FROM about WHERE id=$id";
	$result = mysqli_query($con,$sql);
	if($result){

		header("location:manage-about.php");
	}
	else{
		echo "failed to delete the data";
	}
}


?>