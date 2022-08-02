<?php
    require("connection.php");
	// SELECT THE DATA for User ID selected.
	if(isset($_POST['up'])){
		 $amazi = $_POST['amazina'];
		 $salary = $_POST['umushahara'];
		 $query ="UPDATE `usertb` SET 
		             `names`='$amazi', 
					 `salary`=$salary 
					 WHERE id=".$_GET['UserId'];
		$rs = mysqli_query($con, $query);
		if($rs){
			echo "<p style='color:green;'>Data well updated<br/></p>";
		}else{
			echo "<p style='color:red;'>Something is wrong".mysqli_error($con);"<br/></p>";
		}
	}
	
	$query ="SELECT * FROM usertb WHERE id =".$_GET['UserId'];
	$res = mysqli_query($con,$query);
	if(!$res){
		echo "Not done";
	}else{
		if($row =mysqli_fetch_assoc($res)){ 
  ?>
  <html>
     <head>
	    <title>User Management</title>
	 </head>
  <body> 
   <h2>User Editing Process</h2><hr/> 
     <form method="post" action="" >
	     <label> Names: </label>
	       <input type="text" name="amazina" value="<?php echo $row['names'];?>" placeholder="Andika amazina"/><br/>
		 <label> Salary: </label>
		   <input type="number" name="umushahara" value="<?php echo $row['salary'];?>" placeholder="Uzuza umushahara wawe" /><br/>
		   <input type="submit" value="UPDATE" name="up">
		   <a href="index.php">Back</a> 
	 </form> 

	 <hr/>
	 <h2> Those data are coming from JavaScript File</h2>
     <script src="srciptGroup1.js"> </script>
	 <hr/>
  </body>